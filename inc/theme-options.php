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

    // Create a container for the header options
    Container::make('theme_options', __('Header'))
        ->set_page_parent($basic_options_container) // reference to a top level container
        ->add_fields(array(
            Field::make('text', 'scaletopia_header_btn_text', "Header Button Text")
                ->set_default_value('Apply for risk-free pilot'),
            Field::make('text', 'scaletopia_header_btn_link', "Header Button Link")
                ->set_default_value('/application'),
        ));


    Container::make('theme_options', "Footer")
        ->set_page_parent($basic_options_container) // reference to a top level container
        ->add_fields(array(
            // Top Section
            Field::make('image', 'scaletopia_footer_logo', "Footer Logo"),
            Field::make('text', 'scaletopia_footer_title', "Footer Title")
                ->set_help_text('Use <span> tags for highlights'),
            Field::make('textarea', 'scaletopia_footer_description', "Footer Description"),
            Field::make('text', 'scaletopia_footer_cta_text', "CTA Button Text"),
            Field::make('text', 'scaletopia_footer_cta_url', "CTA Button URL"),

            // Navigation Columns
            Field::make('complex', 'scaletopia_footer_nav_cols', "Navigation Columns")
                ->add_fields(array(
                    Field::make('text', 'heading', "Column Heading"),
                    Field::make('complex', 'links', "Links")
                        ->add_fields(array(
                            Field::make('text', 'label', "Link Label"),
                            Field::make('text', 'url', "Link URL"),
                        ))
                )),

            // Socials
            Field::make('text', 'scaletopia_linkedin', "LinkedIn URL"),
            Field::make('image', 'scaletopia_linkedin_icon', "LinkedIn Icon"),
            Field::make('text', 'scaletopia_youtube', "YouTube URL"),
            Field::make('image', 'scaletopia_youtube_icon', "YouTube Icon"),

            // Contact Info
            Field::make('text', 'scaletopia_footer_email', "Contact Email"),
            Field::make('textarea', 'scaletopia_address_usa', "USA Address"),
            Field::make('textarea', 'scaletopia_address_dubai', "Dubai Address"),

            // Bottom Bar
            Field::make('text', 'scaletopia_footer', "Copyright Text"),
            Field::make('text', 'scaletopia_privacy_policy', "Privacy Policy URL"),
            Field::make('text', 'scaletopia_terms_of_service', "Terms of Service URL"),
        ));
}
