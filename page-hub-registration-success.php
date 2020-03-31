<?php get_header(); ?>

<?php require 'includes/navigation.php' ?>


<?php

$google_api_key = get_option('google_geocoding_api_key');
$address = $_POST['hub_street'] . " " . $_POST["hub_zip"] . " " . $_POST["hub_city"] . " " . $_POST["hub_state"] . " " . $_POST["hub_country"];
$url = "https://maps.googleapis.com/maps/api/geocode/json?sensor=false&key=" . $google_api_key . "&address=" . urlencode ( $address );

$header = array("Accept: application/json");

$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');


$response = curl_exec($ch);

$result = json_decode( $response );

$lat = $result->results[0]->geometry->location->lat;
$long = $result->results[0]->geometry->location->lng;


$random_password = wp_generate_password( $length = 12, $include_standard_special_chars = true );
$user_id = wp_create_user($_POST['hub_email'], $random_password, $_POST['hub_email']);

$u = new WP_User( $user_id );
$u->remove_role( 'subscriber' );
$u->add_role( 'author' );


$post_id = wp_insert_post( array(
    'post_author'           => $user_id,
    'post_title'            => $_POST['hub_name'],
    'post_type'             => 'mvv_hub',
    'post_name'             => $_POST['hub_city'] . '_' . $_POST['hub_name']
) );


update_post_meta($post_id, "hub_lat", $lat);
update_post_meta($post_id, "hub_long", $long);


$fields = array(
    "hub_email",
    "hub_street",
    "hub_zip",
    "hub_city",
    "hub_state",
    "hub_country",
    "hub_contact_person",
    "hub_twitter",
    "hub_phone",
    "hub_address",
    "hub_offer",
    "hub_capacity",
    "hub_description",
    "hub_for_free",
    "hub_for_net_cost"
);

foreach ($fields as $field) {
    update_post_meta($post_id, $field, $_POST[$field]);
}



?>

<section>
    <div class="container flex">
        <div class="text editable">
            <h2><?php pll_e('hub_registration_success_message_header') ?></h2>
            <p><?php pll_e('hub_registration_success_message') ?></p>
        </div>
    </div>
    <div class="container flex" style="margin-top: 1rem;">
    <div class="text editable">
            <div class="button">
                <a style="background: {{ plan.color }}" href="https://join.slack.com/t/makervsvirus/shared_invite/zt-d0jrseye-16B4eZm1lkX~Hi8V7zFbiw" target="_blank">
                    <?php pll_e('support_join_slack') ?></a>
            </div>
        </div>
        <div class="text editable">
            <div class="button">
                <a style="background: {{ plan.color }}" href="/wp-admin" target="_blank">
                    <?php pll_e('login_to_wordpress') ?></a>
            </div>
        </div>
    </div>
</section>