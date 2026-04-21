<?php

/**
 * Carbon filed theme settings options
 *
 */

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'scaletopia_option_register');

function scaletopia_option_register()
{

    $basic_options_container = Container::make('theme_options', __('Theme Options'))
        ->add_fields(array(
            Field::make('header_scripts', 'crb_header_script', __('Header Script')),
            Field::make('footer_scripts', 'crb_footer_script', __('Footer Script'))
        ));

    // Create a container for the general options
    Container::make('theme_options', __('General Options'))
        ->set_page_parent($basic_options_container) // reference to a top level container
        ->add_fields(array(
            Field::make('text', 'scaletopia_phone', "Phone"),
            Field::make('text', 'scaletopia_email', "Email"),

            // book now button
            Field::make('text', 'scaletopia_book_now_link', "Book Now Link"),
        ));


    Container::make('theme_options', "Footer")
        ->set_page_parent($basic_options_container) // reference to a top level container
        ->add_fields(array(
            Field::make('text', 'scaletopia_footer', "Copyright Text"),
            Field::make('text', 'scaletopia_linkedin', "LinkedIn URL"),
            Field::make('text', 'scaletopia_youtube', "YouTube URL"),
            Field::make('textarea', 'scaletopia_address_usa', "USA Address"),
            Field::make('textarea', 'scaletopia_address_dubai', "Dubai Address"),
            Field::make('text', 'scaletopia_privacy_policy', "Privacy Policy URL"),
            Field::make('text', 'scaletopia_terms_of_service', "Terms of Service URL"),
        ));
}
