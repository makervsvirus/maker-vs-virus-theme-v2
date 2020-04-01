<?php get_header(); ?>

<?php require 'includes/navigation.php' ?>

<section>
    <div class="container flex">
        <div class="text editable">
            <h2><?php pll_e('equipment_header') ?></h2>
        </div>
    </div>
    <div class="container flex">
        <div class="text editable">
            <form action="/hub-registration-success" method="POST">

                <?php $hub_name = get_post_meta($post->ID, 'hub_name', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="hub_name"><?php pll_e('hub_name') ?></label>
                    <input type="text" style="margin-left: 1rem; width: 100%;" id="hub_name" name="hub_name" value="<?php echo $hub_name ?>" placeholder="<?php pll_e('hub_name') ?>" />
                </div>

                <?php $hub_street = get_post_meta($post->ID, 'hub_street', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="hub_street"><?php pll_e('hub_street') ?></label>
                    <input type="text" style="margin-left: 1rem; width: 100%;" id="hub_street" name="hub_street" value="<?php echo $hub_street ?>" placeholder="<?php pll_e('hub_street') ?>" />
                </div>

                <?php $hub_zip = get_post_meta($post->ID, 'hub_zip', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="hub_zip"><?php pll_e('hub_zip') ?></label>
                    <input type="text" style="margin-left: 1rem; width: 100%;" id="hub_zip" name="hub_zip" value="<?php echo $hub_zip ?>" placeholder="<?php pll_e('hub_zip') ?>" />
                </div>

                <?php $hub_city = get_post_meta($post->ID, 'hub_city', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="hub_city"><?php pll_e('hub_city') ?></label>
                    <input type="text" style="margin-left: 1rem; width: 100%;" id="hub_city" name="hub_city" value="<?php echo $hub_city ?>" placeholder="<?php pll_e('hub_city') ?>" />
                </div>


                <?php $hub_state = get_post_meta($post->ID, 'hub_state', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="hub_state"><?php pll_e('hub_state') ?></label>
                    <input type="text" style="margin-left: 1rem; width: 100%;" id="hub_state" name="hub_state" list="hub_state_list" value="<?php echo $hub_state ?>" placeholder="<?php pll_e('hub_state') ?>" />
                </div>
                <datalist id="hub_state_list">
                    <option>Baden-Württemberg</option>
                    <option>Bayern</option>
                    <option>Berlin</option>
                    <option>Brandenburg</option>
                    <option>Bremen</option>
                    <option>Hamburg</option>
                    <option>Hessen</option>
                    <option>Mecklenburg-Vorpommern</option>
                    <option>Niedersachsen</option>
                    <option>Nordrhein-Westfalen</option>
                    <option>Rheinland-Pfalz</option>
                    <option>Saarland</option>
                    <option>Sachsen</option>
                    <option>Sachsen-Anhalt</option>
                    <option>Schleswig-Holstein</option>
                    <option>Thüringen </option>
                </datalist>


                <?php $hub_country = get_post_meta($post->ID, 'hub_country', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="hub_country"><?php pll_e('hub_country') ?></label>
                    <input type="text" style="margin-left: 1rem; width: 100%;" id="hub_country" name="hub_country" value="<?php echo $hub_country ?>" placeholder="<?php pll_e('hub_country') ?>" />
                </div>


                <?php $hub_contact_person = get_post_meta($post->ID, 'hub_contact_person', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="hub_contact_person"><?php pll_e('hub_contact_person') ?></label>
                    <input type="text" style="margin-left: 1rem; width: 100%;" id="hub_contact_person" name="hub_contact_person" value="<?php echo $hub_contact_person ?>" placeholder="<?php pll_e('hub_contact_person') ?>" />
                </div>


                <?php $hub_email = get_post_meta($post->ID, 'hub_email', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="hub_email"><?php pll_e('hub_email') ?></label>
                    <input type="email" style="margin-left: 1rem; width: 100%;" id="hub_email" name="hub_email" value="<?php echo $hub_email ?>" placeholder="<?php pll_e('hub_email') ?>" />
                </div>


                <?php $hub_twitter = get_post_meta($post->ID, 'hub_twitter', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="hub_twitter"><?php pll_e('hub_twitter') ?></label>
                    <input type="text" style="margin-left: 1rem; width: 100%;" id="hub_twitter" name="hub_twitter" value="<?php echo $hub_twitter ?>" placeholder="<?php pll_e('hub_twitter') ?>" />
                </div>


                <?php $hub_phone = get_post_meta($post->ID, 'hub_phone', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="hub_phone"><?php pll_e('hub_phone') ?></label>
                    <input type="tel" style="margin-left: 1rem; width: 100%;" id="hub_phone" name="hub_phone" value="<?php echo $hub_phone ?>" placeholder="<?php pll_e('hub_phone') ?>" />
                </div>



                <?php $hub_address = get_post_meta($post->ID, 'hub_address', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="hub_address"><?php pll_e('hub_address') ?></label>
                    <textarea style="margin-left: 1rem; width: 100%;" id="hub_address" name="hub_address" placeholder="<?php pll_e('hub_address') ?>"><?php echo $hub_address ?></textarea>
                </div>


                <?php $hub_offer = get_post_meta($post->ID, 'hub_offer', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="hub_offer"><?php pll_e('hub_offer') ?></label>
                    <textarea style="margin-left: 1rem; width: 100%;" id="hub_offer" name="hub_offer" placeholder="<?php pll_e('hub_offer_details') ?>"><?php echo $hub_offer ?></textarea>
                </div>


                <?php $hub_capacity = get_post_meta($post->ID, 'hub_capacity', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="hub_capacity"><?php pll_e('hub_capacity') ?></label>
                    <textarea style="margin-left: 1rem; width: 100%;" id="hub_capacity" name="hub_capacity" placeholder="<?php pll_e('hub_capacity_details') ?>"><?php echo $hub_capacity ?></textarea>
                </div>



                <?php $hub_description = get_post_meta($post->ID, 'hub_description', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="hub_description"><?php pll_e('hub_description') ?></label>
                    <textarea style="margin-left: 1rem; width: 100%;" id="hub_description" name="hub_description" placeholder="<?php pll_e('hub_description') ?>"><?php echo $hub_description ?></textarea>
                </div>



                <?php $hub_for_free = get_post_meta($post->ID, 'hub_for_free', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="hub_for_free"><?php pll_e('hub_for_free') ?></label>
                    <input type="checkbox" style="margin-left: 1rem;" id="hub_for_free" name="hub_for_free" <?php if ($hub_for_free) {
                                                                                                                echo 'checked';
                                                                                                            } ?>>
                    <div style="width: 100%;"></div>
                </div>

                <?php $hub_for_net_cost = get_post_meta($post->ID, 'hub_for_net_cost', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="hub_for_net_cost"><?php pll_e('hub_for_net_cost') ?></label>
                    <input type="checkbox" style="margin-left: 1rem;" id="hub_for_net_cost" name="hub_for_net_cost" <?php if ($hub_for_net_cost) {
                                                                                                                        echo 'checked';
                                                                                                                    } ?>>
                    <div style="width: 100%;"></div>
                </div>


                <div style="margin-top: 1.5rem; display: flex; justify-content: center; align-items: center;">
                    <input type="submit" value="<?php pll_e('hub_registration_send') ?>">
                </div>

            </form>

        </div>
    </div>
</section>