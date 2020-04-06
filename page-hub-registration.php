<?php get_header(); ?>

<div class="bg-white" style="padding-bottom: 2rem;">

    <div class="clr-row">
        <div class="clr-col clr-col-sm-8 clr-offset-sm-2">
            <?php while (have_posts()) : the_post(); ?>
                <div class="card">
                    <div class="card-block">

                        <h1><?php the_title() ?></h1>
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <div class="clr-row">
        <div class="clr-col clr-col-sm-8 clr-offset-sm-2">
            <div class="card">
                <div class="card-block">

                    <form action="/hub-registration-success" method="POST" class="clr-form clr-form-resp">

                        <?php $hub_name = get_post_meta($post->ID, 'hub_name', true); ?>
                        <div class="clr-form-control">
                            <label class="clr-control-label" for="hub_name"><?php _e('Name des Hub *') ?></label>
                            <div class="clr-control-container">
                                <div class="clr-input-wrapper"><input type="text" class="clr-input" id="hub_name" name="hub_name" value="<?php echo $hub_name ?>" placeholder="<?php _e('Name des Hub') ?>" required /></div>
                            </div>
                        </div>


                        <div class="clr-form-control">
                            <label class="clr-control-label" for="hub_email"><?php _e('E-Mail *') ?></label>
                            <div class="clr-control-container">
                                <div class="clr-input-wrapper"><input type="email" class="clr-input" id="hub_email" name="hub_email" value="<?php echo $hub_email ?>" placeholder="<?php _e('E-Mail') ?>" required /></div>
                            </div>
                        </div>


                        <div class="clr-form-control">
                            <label class="clr-control-label" for="hub_contact_person"><?php _e('Kontaktperson *') ?></label>
                            <div class="clr-control-container">
                                <div class="clr-input-wrapper"><input type="text" class="clr-input" id="hub_contact_person" name="hub_contact_person" placeholder="<?php _e('Kontaktperson') ?>" required /></div>
                            </div>
                        </div>


                        <?php $hub_street = get_post_meta($post->ID, 'hub_street', true); ?>
                        <div class="clr-form-control">
                            <label class="clr-control-label" for="hub_street"><?php _e('Straße und Nr') ?></label>
                            <div class="clr-control-container">
                                <div class="clr-input-wrapper"><input type="text" class="clr-input" id="hub_street" name="hub_street" value="<?php echo $hub_street ?>" placeholder="<?php _e('Straße und Nr') ?>" /></div>
                            </div>
                        </div>

                        <?php $hub_zip = get_post_meta($post->ID, 'hub_zip', true); ?>
                        <div class="clr-form-control">
                            <label class="clr-control-label" for="hub_zip"><?php _e('PLZ') ?></label>
                            <div class="clr-control-container">
                                <div class="clr-input-wrapper"><input type="text" class="clr-input" id="hub_zip" name="hub_zip" value="<?php echo $hub_zip ?>" placeholder="<?php _e('PLZ') ?>" /></div>
                            </div>
                        </div>

                        <?php $hub_city = get_post_meta($post->ID, 'hub_city', true); ?>
                        <div class="clr-form-control">
                            <label class="clr-control-label" for="hub_city"><?php _e('Stadt *') ?></label>
                            <div class="clr-control-container">
                                <div class="clr-input-wrapper"><input type="text" class="clr-input" id="hub_city" name="hub_city" value="<?php echo $hub_city ?>" placeholder="<?php _e('Stadt') ?>" required /></div>
                            </div>
                        </div>


                        <?php $hub_state = get_post_meta($post->ID, 'hub_state', true); ?>
                        <div class="clr-form-control">
                            <label class="clr-control-label" for="hub_state"><?php _e('Bundesland') ?></label>
                            <div class="clr-control-container">
                                <div class="clr-input-wrapper"><input type="text" class="clr-input" id="hub_state" name="hub_state" list="hub_state_list" value="<?php echo $hub_state ?>" placeholder="<?php _e('Bundesland') ?>" /></div>
                            </div>
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


                        <?php $hub_country = "Deutschland" ?>
                        <div class="clr-form-control">
                            <label class="clr-control-label" for="hub_country"><?php _e('Land') ?></label>
                            <div class="clr-control-container">
                                <div class="clr-input-wrapper"><input type="text" class="clr-input" id="hub_country" name="hub_country" placeholder="<?php _e('hub_country') ?>" /></div>
                            </div>
                        </div>


                        <?php $hub_twitter = get_post_meta($post->ID, 'hub_twitter', true); ?>
                        <div class="clr-form-control">
                            <label class="clr-control-label" for="hub_twitter"><?php _e('Twitter') ?></label>
                            <div class="clr-control-container">
                                <div class="clr-input-wrapper"><input type="text" class="clr-input" id="hub_twitter" name="hub_twitter" value="<?php echo $hub_twitter ?>" placeholder="<?php _e('Twitter') ?>" /></div>
                            </div>
                        </div>


                        <?php $hub_phone = get_post_meta($post->ID, 'hub_phone', true); ?>
                        <div class="clr-form-control">
                            <label class="clr-control-label" for="hub_phone"><?php _e('Telefon') ?></label>
                            <div class="clr-control-container">
                                <div class="clr-input-wrapper"><input type="tel" class="clr-input" id="hub_phone" name="hub_phone" value="<?php echo $hub_phone ?>" placeholder="<?php _e('Telefon') ?>" /></div>
                            </div>
                        </div>


                        <?php $hub_offer = get_post_meta($post->ID, 'hub_offer', true); ?>
                        <div class="clr-form-control">
                            <label class="clr-control-label" for="hub_offer"><?php _e('Angebot') ?></label>
                            <textarea class="clr-textarea" class="clr-input" id="hub_offer" name="hub_offer" placeholder="<?php _e('Was könnt ihr bereitstellen? (z.B. Prusa RC3, Ersatzteile, ...)') ?>"><?php echo $hub_offer ?></textarea>
                        </div>


                        <?php $hub_capacity = get_post_meta($post->ID, 'hub_capacity', true); ?>
                        <div class="clr-form-control">
                            <label class="clr-control-label" for="hub_capacity"><?php _e('Kapazitäten') ?></label>
                            <textarea class="clr-textarea" class="clr-input" id="hub_capacity" name="hub_capacity" placeholder="<?php _e('Was habt ihr da? (z.B. 3D Drucker, Textil, CNC, ...)') ?>"><?php echo $hub_capacity ?></textarea>
                        </div>



                        <?php $hub_description = get_post_meta($post->ID, 'hub_description', true); ?>
                        <div class="clr-form-control">
                            <label class="clr-control-label" for="hub_description"><?php _e('Beschreibung') ?></label>
                            <textarea class="clr-textarea" class="clr-input" id="hub_description" name="hub_description" placeholder="<?php _e('Kurze Beschreibung (z.B. Anfahrt, Erreichbarkeit, allgemeine Informationen)') ?>"><?php echo $hub_description ?></textarea>
                        </div>



                        <?php $hub_for_free = get_post_meta($post->ID, 'hub_for_free', true); ?>
                        <div class="clr-form-control">
                            <label class="clr-control-label" for="hub_for_free"><?php _e('Wir stellen kostenlos zu Verfügung') ?></label>
                            <div class="clr-control-container">
                                <div class="clr-input-wrapper">
                                    <input type="checkbox" id="hub_for_free" name="hub_for_free" <?php if ($hub_for_free) {
                                                                                                        echo 'checked';
                                                                                                    } ?>>
                                </div>
                            </div>
                        </div>

                        <?php $hub_for_net_cost = get_post_meta($post->ID, 'hub_for_net_cost', true); ?>
                        <div class="clr-form-control">
                            <label class="clr-control-label" for="hub_for_net_cost"><?php _e('Wir produzieren zum Selbstkostenpreis') ?></label>
                            <div class="clr-control-container">
                                <div class="clr-input-wrapper">
                                    <input type="checkbox" id="hub_for_net_cost" name="hub_for_net_cost" <?php if ($hub_for_net_cost) {
                                                                                                                echo 'checked';
                                                                                                            } ?>>
                                </div>
                            </div>
                        </div>

                        <div class="clr-form-control">
                        <label class="clr-control-label" for="hub_for_net_cost"><?php _e('Mit dem Absenden bestätige ich,') ?></label>

                            <div class="clr-control-container">
                                <div class="clr-input-wrapper">
                                    <input type="checkbox" id="hub_disclaimer" name="hub_disclaimer" <?php if ($hub_disclaimer) {
                                                                                                                echo 'checked';
                                                                                                            } ?>/>                                                                                                            
                                </div>
                            </div>
                        </div>
                        <ul><li>dass meine angegebenen Daten von Maker Vs Virus gespeichert und verarbeitet werden.</li>
                        <li>dass ich den <a href="/coc">Code of Conduct</a> und die <a href="/datenschutz">Datenschutzerklärung</a> gelesen habe und damit einverstanden bin</li>
                        </ul>

                        <div style="margin-top: 1.5rem; display: flex; justify-content: center; align-items: center;">
                            <button class="btn btn-outline" type="submit"><?php _e('Registrierung für den Hub absenden') ?></button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php get_footer() ?>