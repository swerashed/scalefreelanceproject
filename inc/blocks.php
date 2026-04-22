<?php

use Carbon_Fields\Field;
use Carbon_Fields\Block;

add_action('carbon_fields_register_fields', 'hungry_register_scaletopia_component');

function hungry_register_scaletopia_component()
{
    // Hero Banner (Home)
    Block::make('Hero Banner (Home)')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Hero Banner</h2>'),
            Field::make('text', 'title', 'Title'),
            Field::make('rich_text', 'description', 'Description'),
            Field::make('text', 'btn_title', 'Button Title'),
            Field::make('text', 'btn_link', 'Button Link'),
            Field::make('text', 'button_description', 'Button Description'),
            Field::make('image', 'img', 'Image'),
            Field::make('text', 'video', 'Video'),
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Hero Banner')])
        ->set_description(__('Custom Block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/hero-banner');
        });

    Block::make('Partners (Home)')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Partners (Home)</h2>'),
            Field::make('text', 'title', 'Title'),
            Field::make('complex', 'items', 'Items Top')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('image', 'img', 'Image'),
                )),
            Field::make('complex', 'items_bottom', 'Items Bottom')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('image', 'img', 'Image'),
                ))
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Home CTA')])
        ->set_description(__('Custom Block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/partners');
        });

    Block::make('Services Cards (Home)')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Services Cards (Home)</h2>'),
            Field::make('text', 'title', 'Section Title'),
            Field::make('rich_text', 'description', 'Section Description'),
            Field::make('complex', 'items', 'Items')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('text', 'title', 'Title'),
                    Field::make('textarea', 'description', 'Description'),
                ))
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Services Cards (Home)')])
        ->set_description(__('Custom Block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/services-card');
        });

    Block::make('Case Studies Slider (Home)')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Case Studies Slider (Home)</h2>'),
            Field::make('text', 'title', 'Title'),
            Field::make('rich_text', 'description', 'Description'),
            Field::make('complex', 'items', 'Items')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('text', 'title', 'Title'),
                    Field::make('text', 'sub_title', 'Sub Title'),
                    Field::make('image', 'img', 'Image'),
                    Field::make('rich_text', 'description', 'Description'),
                    Field::make('text', 'btn_title', 'Button Title'),
                    Field::make('text', 'btn_link', 'Button Link'),

                ))
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Case Studies Slider (Home)')])
        ->set_description(__('Custom Block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/case-studies-slider');
        });


    Block::make('Services (Home)')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Services (Home)</h2>'),
            Field::make('text', 'title', 'Title'),
            Field::make('rich_text', 'description', 'Description'),
            Field::make('complex', 'items', 'Items')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('image', 'icon', 'Icon'),
                    Field::make('text', 'title', 'Title'),
                    Field::make('rich_text', 'description', 'Description'),
                ))
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Services (Home)')])
        ->set_description(__('Custom Block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/services');
        });




    Block::make('Contact')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Contact</h2>'),
            Field::make('text', 'title', 'Title'),

        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Contact (Home)')])
        ->set_description(__('Custom Block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/contact');
        });

    Block::make('Generic Banner (Inner)')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Generic Banner (Inner)</h2>'),
            Field::make('text', 'title', 'Title'),
            Field::make('rich_text', 'description', 'Description'),
            Field::make('image', 'img', 'Image'),
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Generic Banner (Inner)')])
        ->set_description(__('Custom Block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/generic-banner-inner');
        });

    Block::make('Mission and Vision (Inner)')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Mission and Vision (Inner)</h2>'),
            Field::make('rich_text', 'description', 'Description'),
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Mission and Vision (Inner)')])
        ->set_description(__('Custom Block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/mission-and-vision');
        });

    Block::make('Statistics (Inner)')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Statistics (Inner)</h2>'),
            Field::make('complex', 'stats', 'Stats')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('text', 'number', 'Number'),
                    Field::make('rich_text', 'description', 'Description'),
                ))
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Statistics (Inner)')])
        ->set_description(__('Custom Block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/statistics-inner');
        });

    Block::make('Case Studies Banner (Inner)')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Case Studies Banner (Inner)</h2>'),
            Field::make('text', 'title', 'Title'),
            Field::make('rich_text', 'description', 'Description'),
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Inner Banner')])
        ->set_description(__('Custom Block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/case-studies-banner-inner');
        });

    // Statistics (Inner)
    Block::make('Case Studies (Post)')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Case Studies (Post)</h2>'),
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Statistics')])
        ->set_description(__('Custom Block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/case-studies-post');
        });


    Block::make('Pricing Banner (Inner)')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Pricing Banner (Inner)</h2>'),
            Field::make('text', 'title', 'Title'),
            Field::make('rich_text', 'description', 'Description'),
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Pricing Banner (Inner)')])
        ->set_description(__('Custom Block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/pricing-banner-inner');
        });

    Block::make('Our Pricing')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Our Pricing</h2>'),
            Field::make('text', 'title', 'Title'),
            Field::make('rich_text', 'details', 'Details'),

            // card title
            Field::make('text', 'card_title', 'Card Title'),
            Field::make('complex', 'items', 'Items')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('text', 'title', 'Title'),
                )),
            Field::make('textarea', 'bottom_description', 'Bottom Description'),
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Our Pricing')])
        ->set_description(__('Custom Block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/our-pricing');
        });

    Block::make('FAQ')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>FAQ</h2>'),
            Field::make('text', 'title', 'Title'),
            Field::make('rich_text', 'description', 'Description'),
            Field::make('complex', 'items', 'Items')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('text', 'title', 'Title'),
                    Field::make('rich_text', 'description', 'Description'),
                ))
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('FAQ')])
        ->set_description(__('Custom Block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/faq');
        });

    Block::make('Why Choose Us Comparison')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Comparison</h2>'),
            Field::make('text', 'title', 'Title'),
            Field::make('rich_text', 'description', 'Description'),
            Field::make('image', 'scaletopia_logo', 'Scaletopia Logo'),
            Field::make('text', 'others_label', 'Others Label'),
            Field::make('complex', 'comparison_rows', 'Comparison Rows')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('text', 'row_label', 'Row Label'),
                    Field::make('text', 'scaletopia_title', 'Scaletopia Title'),
                    Field::make('textarea', 'scaletopia_desc', 'Scaletopia Description'),
                    Field::make('text', 'others_title', 'Others Title'),
                    Field::make('textarea', 'others_desc', 'Others Description'),
                )),
            Field::make('text', 'btn_title', 'Button Title'),
            Field::make('text', 'btn_link', 'Button Link'),
            Field::make('text', 'footer_text', 'Footer Text'),
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Comparison')])
        ->set_description(__('Custom Comparison Block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/comparison');
        });

    Block::make('Phases (Home)')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Phases (Home)</h2>'),
            Field::make('text', 'title', 'Title'),
            Field::make('rich_text', 'description', 'Description'),
            Field::make('complex', 'items', 'Phases')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('text', 'badge', 'Badge (e.g., Phase 01)'),
                    Field::make('text', 'title', 'Title'),
                    Field::make('textarea', 'description', 'Description'),
                    Field::make('image', 'img', 'Image'),
                ))
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Phases')])
        ->set_description(__('Custom Phases Block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/phases');
        });

    Block::make('Social proof')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Social proof</h2>'),
            Field::make('text', 'title', 'Title'),
            Field::make('rich_text', 'description', 'Description'),
            Field::make('complex', 'cards', 'Cards')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('image', 'image', 'Image'),
                    Field::make('text', 'footer_title', 'Footer Title'),
                    Field::make('text', 'footer_subtitle', 'Footer Subtitle'),
                )),
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Social proof')])
        ->set_description(__('Custom Social Proof Block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/social-proof');
        });
}



