<?php ?>
                        <div id="optinforms-form5-container">
                            <div id="optinforms-form5" style="background: <?php echo optinforms_form5_default_background(); ?>;">
                                <div id="optinforms-form5-container-left" <?php if (get_option('optinforms_form5_hide_subtitle')== '1' && get_option('optinforms_form5_hide_disclaimer')== '1') { echo 'style="width:100%;margin:10px 0;"'; } ?>>
                                    <div id="optinforms-form5-title" style="font-family:<?php echo optinforms_form5_default_title_font(); ?>; font-size:<?php echo optinforms_form5_default_title_size(); ?>; line-height:<?php echo optinforms_form5_default_title_size(); ?>; color:<?php echo optinforms_form5_default_title_color(); ?>; <?php if (get_option('optinforms_form5_hide_title')== '1') { echo 'display:none;'; } ?>"><?php echo do_shortcode( optinforms_form5_default_title() ); ?></div><!--optinforms-form5-title-->
                                    <input type="text" id="optinforms-form5-name-field" placeholder="<?php echo do_shortcode( optinforms_form5_default_name_field() ); ?>" style="font-family:<?php echo optinforms_form5_default_fields_font(); ?>; font-size:<?php echo optinforms_form5_default_fields_size(); ?>; color:<?php echo optinforms_form5_default_fields_color(); ?>; <?php if (get_option('optinforms_form5_hide_name_field')== '1') { echo 'display:none;'; } ?>" />
                                    <input type="text" id="optinforms-form5-email-field" placeholder="<?php echo do_shortcode( optinforms_form5_default_email_field() ); ?>" style="font-family:<?php echo optinforms_form5_default_fields_font(); ?>; font-size:<?php echo optinforms_form5_default_fields_size(); ?>; color:<?php echo optinforms_form5_default_fields_color(); ?>" />
                                    <input type="button" id="optinforms-form5-button" value="<?php echo do_shortcode( optinforms_form5_default_button_text() ); ?>" style="font-family:<?php echo optinforms_form5_default_button_text_font(); ?>; font-size:<?php echo optinforms_form5_default_button_text_size(); ?>; color:<?php echo optinforms_form5_default_button_text_color(); ?>; background-color:<?php echo optinforms_form5_default_button_background(); ?>" />
                                </div><!--optinforms-form5-container-left-->
                                <div id="optinforms-form5-container-right" <?php if (get_option('optinforms_form5_hide_subtitle')== '1' && get_option('optinforms_form5_hide_disclaimer')== '1') { echo 'style="display:none;"'; } ?>>
                                    <div id="optinforms-form5-subtitle" style="font-family:<?php echo optinforms_form5_default_subtitle_font(); ?>; font-size:<?php echo optinforms_form5_default_subtitle_size(); ?>; color:<?php echo optinforms_form5_default_subtitle_color(); ?>; <?php if (get_option('optinforms_form5_hide_subtitle')== '1') { echo 'display:none;'; } ?>"><?php echo do_shortcode( optinforms_form5_default_subtitle() ); ?></div><!--optinforms-form5-subtitle-->
                                    <div id="optinforms-form5-disclaimer" style="font-family:<?php echo optinforms_form5_default_disclaimer_font(); ?>; font-size:<?php echo optinforms_form5_default_disclaimer_size(); ?>; color:<?php echo optinforms_form5_default_disclaimer_color(); ?>; <?php if (get_option('optinforms_form5_hide_disclaimer')== '1') { echo 'display:none;'; } ?> <?php if (get_option('optinforms_form5_hide_subtitle')== '1') { echo 'margin: 0 20px;'; } ?>"><?php echo do_shortcode( optinforms_form5_default_disclaimer() ); ?></div><!--optinforms-form5-disclaimer-->
                                </div><!--optinforms-form5-container-right-->
                                <div class="clear"></div>
                            </div><!--optinforms-form5-->
                        </div><!--optinforms-form5-container-->
                        <div class="clear"></div>

<?php ?>