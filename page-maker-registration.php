<?php get_header(); ?>

<div class="bg-white">

    <div class="clr-row">
        <div class="clr-col clr-col-sm-8 clr-offset-sm-2">
            <?php while (have_posts()) : the_post(); ?>

                <h1><?php the_title() ?></h1>
                <p>
                    <?php the_content(); ?>
                </p>

            <?php endwhile; ?>
        </div>
    </div>

    <div class="clr-row">
        <div class="clr-col-lg-8 clr-offset-lg-2">

            <form action="/maker-registration-success" method="POST" class="clr-form">

                <?php $maker_name = get_post_meta($post->ID, 'maker_name', true); ?>

                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="maker_name">Name</label>

                    <div class="clr-control-container" style="margin-left: 1rem; width: 100%;">
                        <div class="clr-input-wrapper">
                            <input type="text" id="maker_name" name="maker_name" value="<?php echo $maker_name ?>" placeholder="Name" class="clr-input" style="width: 100%;">
                            <clr-icon class="clr-validate-icon" shape="exclamation-circle"></clr-icon>
                        </div>
                        <span class="clr-subtext">Der Name wird öffentlich angezeigt. Du kannst auch nur einen Vorname oder ein Pseudonym angeben.</span>
                    </div>
                </div>


                <?php $maker_street = get_post_meta($post->ID, 'maker_street', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="maker_street">Straße / Nr</label>
                    <input type="text" class="clr-input" style="margin-left: 1rem; width: 100%;" id="maker_street" name="maker_street" value="<?php echo $maker_street ?>" placeholder="Straße" />
                </div>

                <?php $maker_zip = get_post_meta($post->ID, 'maker_zip', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="maker_zip">Postleitzahl</label>
                    <input type="text" class="clr-input" style="margin-left: 1rem; width: 100%;" id="maker_zip" name="maker_zip" value="<?php echo $maker_zip ?>" placeholder="Postleitzahl" />
                </div>

                <?php $maker_city = get_post_meta($post->ID, 'maker_city', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="maker_city">Stadt</label>
                    <input type="text" class="clr-input" style="margin-left: 1rem; width: 100%;" id="maker_city" name="maker_city" value="<?php echo $maker_city ?>" />
                </div>


                <?php $maker_state = get_post_meta($post->ID, 'maker_state', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="maker_state">Bundesland</label>
                    <input type="text" class="clr-input" style="margin-left: 1rem; width: 100%;" id="maker_state" name="maker_state" list="maker_state_list" value="<?php echo $maker_state ?>" />
                </div>
                <datalist id="maker_state_list">
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


                <?php $maker_country = get_post_meta($post->ID, 'maker_country', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="maker_country">Land</label>
                    <input type="text" class="clr-input" style="margin-left: 1rem; width: 100%;" id="maker_country" name="maker_country" value="<?php echo $maker_country ?>" />
                </div>



                <?php $maker_email = get_post_meta($post->ID, 'maker_email', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="maker_email">E-Mail</label>
                    <input type="email" class="clr-input" style="margin-left: 1rem; width: 100%;" id="maker_email" name="maker_email" value="<?php echo $maker_email ?>" />
                </div>


                <?php $maker_twitter = get_post_meta($post->ID, 'maker_twitter', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="maker_twitter">Twitter</label>
                    <input type="text" class="clr-input" style="margin-left: 1rem; width: 100%;" id="maker_twitter" name="maker_twitter" value="<?php echo $maker_twitter ?>" />
                </div>


                <?php $maker_phone = get_post_meta($post->ID, 'maker_phone', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="maker_phone">Telefon</label>
                    <input type="tel" class="clr-input" style="margin-left: 1rem; width: 100%;" id="maker_phone" name="maker_phone" value="<?php echo $maker_phone ?>" />
                </div>



                <?php $maker_capacity = get_post_meta($post->ID, 'maker_capacity', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="maker_capacity">Kapazitäten</label>
                    <textarea class="clr-textarea" style="margin-left: 1rem; width: 100%;" id="maker_capacity" name="maker_capacity"><?php echo $maker_capacity ?></textarea>
                </div>



                <?php $maker_description = get_post_meta($post->ID, 'maker_description', true); ?>
                <div style="margin-top: .5rem; display: flex; justify-content: center; align-items: center;">
                    <label class="" style="min-width: 150px;" for="maker_description">Kurzvorstellung</label>
                    <textarea class="clr-textarea" style="margin-left: 1rem; width: 100%;" id="maker_description" name="maker_description"><?php echo $maker_description ?></textarea>
                </div>


                <div style="margin-top: 3rem; display: flex; justify-content: center; align-items: center;">

                    <input type="checkbox" style="margin-left: 1rem;" id="hub_for_net_cost" name="hub_for_net_cost" <?php if ($hub_for_net_cost) {
                                                                                                                        echo 'checked';
                                                                                                                    } ?> required>

                    <div style="width: 100%; padding-left: 1rem;">
                        <label class="" style="min-width: 150px;" for="hub_for_net_cost">
                            Ich stimme zu, dass meine angegebenen Daten von Maker Vs Virus gespeichert und verarbeitet werden.
                            Ich habe den <a href="/coc">Code of Conduct</a> und die <a href="/datenschutz">Datenschutzerklärung</a> gelesen und und stimme zu.
                        </label>
                    </div>
                </div>


                <div style="margin-top: 1.5rem; display: flex; justify-content: center; align-items: center;">
                    <button class="btn btn-outline" type="submit"><?php pll_e('maker_registration_send') ?></button>
                </div>

            </form>

        </div>
    </div>
</div>

<?php get_footer() ?>