<?php

add_action('admin_init', 'my_general_section');
function my_general_section() {
    //add email
    add_settings_section(
        'general_info_section', //Section ID
        'General Information & Contact', //Section Title
        'general_info_callback', //Callback
        'general' //Place to see the section
    );

    add_settings_field( // Option 1
        'email', // Option ID
        'Email', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'general_info_section', // Name of our section
        array( // The $args
            'email' // Should match Option ID
        )
    );

    add_settings_field( // Option 1
        'about', // Option ID
        'About', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'general_info_section', // Name of our section
        array( // The $args
            'about' // Should match Option ID
        )
    );


    add_settings_field( // Option 2
        'address', // Option ID
        'Address', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'general_info_section', // Name of our section
        array( // The $args
            'address' // Should match Option ID
        )
    );

    add_settings_field( // Option 3
        'tel_number', // Option ID
        'Phone Number', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'general_info_section', // Name of our section
        array( // The $args
            'tel_number' // Should match Option ID
        )
    );

    register_setting('general','email', 'esc_attr');
    register_setting('general','about', 'esc_attr');
    register_setting('general','name', 'esc_attr');
    register_setting('general','address', 'esc_attr');
    register_setting('general','tel_number', 'esc_attr');


    //social Media Links
    add_settings_section(
        'social_media_section', // Section ID
        'Social Media', // Section Title
        'social_media_callback', // Callback
        'general' // What Page?  This makes the section show up on the General Settings Page
    );

    add_settings_field( // Option 1
        'facebook_link', // Option ID
        'Facebook', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'social_media_section', // Name of our section
        array( // The $args
            'facebook_link' // Should match Option ID
        )
    );

    add_settings_field( // Option 2
        'twitter_link', // Option ID
        'Twitter', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'social_media_section', // Name of our section (General Settings)
        array( // The $args
            'twitter_link' // Should match Option ID
        )
    );

    add_settings_field( // Option 3
        'google_link', // Option ID
        'Google Plus', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'social_media_section', // Name of our section
        array( // The $args
            'google_link' // Should match Option ID
        )
    );
    
    add_settings_field( // Option 3
        'youtube_link', // Option ID
        'Youtube', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'social_media_section', // Name of our section
        array( // The $args
            'youtube_link' // Should match Option ID
        )
    );

    register_setting('general','facebook_link', 'esc_attr');
    register_setting('general','twitter_link', 'esc_attr');
    register_setting('general','google_link', 'esc_attr');
    register_setting('general','youtube_link', 'esc_attr');

}

function phone_numbers_options_callback() { // Section Callback
    echo '<p>Contact phone numbers to be displayed on site</p>';
}

function social_media_callback() { // Section Callback
    echo "<p>Social Media links for the site's footer & header</p>";
}

function general_info_callback() { // Section Callback
    echo "<p>General information links for the site's footer</p>";
}

function my_textbox_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}

?>
