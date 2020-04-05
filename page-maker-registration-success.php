<?php get_header(); ?>



<?php

$google_api_key = get_option('google_geocoding_api_key');
$address = $_POST['maker_street'] . " " . $_POST["maker_zip"] . " " . $_POST["maker_city"] . " " . $_POST["maker_state"] . " " . $_POST["maker_country"];
$url = "https://maps.googleapis.com/maps/api/geocode/json?sensor=false&key=" . $google_api_key . "&address=" . urlencode($address);

$header = array("Accept: application/json");

$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');


$response = curl_exec($ch);

$result = json_decode($response);

$lat = $result->results[0]->geometry->location->lat;
$long = $result->results[0]->geometry->location->lng;


$random_password = wp_generate_password($length = 12, $include_standard_special_chars = true);
$user_id = wp_create_user($_POST['maker_email'], $random_password, $_POST['maker_email']);

$u = new WP_User($user_id);
$u->remove_role('subscriber');
$u->add_role('author');


$post_id = wp_insert_post(array(
    'post_author'           => $user_id,
    'post_title'            => $_POST['maker_name'],
    'post_type'             => 'mvv_maker',
    'post_name'             => $_POST['maker_name'],
    'post_content'          => isset( $_POST['maker_description'] ) ? $_POST['maker_description'] : null
));


update_post_meta($post_id, "maker_lat", $lat);
update_post_meta($post_id, "maker_long", $long);


$fields = array(
    "maker_email",
    "maker_twitter",
    "maker_phone",

    "maker_street",
    "maker_zip",
    "maker_city",
    "maker_state",
    "maker_country",
    
    "maker_capacity",
);

foreach ($fields as $field) {
    if (isset($_POST[$field])) {
        update_post_meta($post_id, $field, $_POST[$field]);
    }
}

sendMail("maker", $_POST);

?>

<div style="min-height: 100vh;">
    <div class="bg-white" style="padding-bottom: 2rem;">


        <div class="clr-row">
            <div class="clr-col-lg-8 clr-offset-lg-2">
                <?php while (have_posts()) : the_post(); ?>
                    <h1><?php the_title() ?></h1>
                    <p>
                        <?php the_content(); ?>
                    </p>
                <?php endwhile; ?>
            </div>

            <div class="clr-col-lg-8 clr-offset-lg-2 style=" margin-top: 1rem;">
                Dein Username ist <?php echo $_POST["maker_email"]; ?> <br />
                Dein Passwort ist <?php echo $random_password; ?> <br />
            </div>

            <div class="clr-col-lg-8 clr-offset-lg-2 style=" margin-top: 1rem;">

                <a href="https://join.slack.com/t/makervsvirus/shared_invite/zt-d0jrseye-16B4eZm1lkX~Hi8V7zFbiw" target="_blank">
                    <button class="btn btn-primary">Join Slack</button>
                </a>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>