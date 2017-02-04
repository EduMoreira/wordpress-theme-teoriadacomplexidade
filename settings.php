<?php
    function theme_settings_page()
    {
        ?>
        <div class="wrap">
            <h1>Theme Panel</h1>
            <form method="post" action="options.php">
                <?php
                settings_fields("google-analytics");
                settings_fields("seo-settings");
                do_settings_sections("theme-options");
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }

function display_ga_uid_element()
{
    ?>
    <input type="text" name="ga-uid" id="ga-uid" value="<?php echo get_option('ga-uid'); ?>" />
<?php
}

function display_seo_meta_description_element()
{
    ?>
    <textarea rows="3" name="seo-meta-description" id="seo-meta-description"><?php echo get_option('seo-meta-description'); ?></textarea>
    <?php
}

function display_theme_panel_fields()
{
    add_settings_section("google-analytics", "Google Analytics", null, "theme-options");
    add_settings_field("ga-uid", "UID", "display_ga_uid_element", "theme-options", "google-analytics");
    add_settings_section("seo-settings", "SEO Settings", null, "theme-options");
    add_settings_field("seo-meta-description", "Meta Description", "display_seo_meta_description_element", "theme-options", "seo-settings");
    register_setting("google-analytics", "ga-uid");
    register_setting("seo-settings", "seo-meta-description");
}
?>