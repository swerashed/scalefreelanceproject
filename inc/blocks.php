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

    Block::make('Case Studies Slider')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Case Studies Slider</h2>'),
            Field::make('text', 'title', 'Section Title'),
            Field::make('rich_text', 'description', 'Section Description'),
            Field::make('association', 'items', 'Select Case Studies')
                ->set_types(array(
                    array(
                        'type' => 'post',
                        'post_type' => 'case_study',
                    ),
                ))
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Case Studies'), __('Slider')])
        ->set_description(__('Case studies slider re-created from success stories'))
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
            Field::make('text', 'btn_title', 'Button Title'),
            Field::make('text', 'btn_link', 'Button Link'),
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
            Field::make('text', 'title', 'Section Title'),
            Field::make('rich_text', 'subtitle', 'Section Subtitle'),

            // Card Left Column (Pilot)
            Field::make('text', 'pilot_tag', 'Pilot Tag'),
            Field::make('text', 'pilot_price', 'Pilot Price Range'),
            Field::make('text', 'price_note', 'Price Note'),
            Field::make('textarea', 'pilot_description', 'Pilot Description'),
            Field::make('text', 'guarantee_title', 'Guarantee Title'),
            Field::make('textarea', 'guarantee_description', 'Guarantee Description'),

            // Card Right Column (Definition)
            Field::make('text', 'definition_tag', 'Definition Tag'),
            Field::make('text', 'definition_title', 'Definition Title'),
            Field::make('complex', 'definition_items', 'Definition Items')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('text', 'title', 'Title'),
                    Field::make('textarea', 'description', 'Description'),
                )),

            // Bottom CTA
            Field::make('text', 'cta_text', 'CTA Text'),
            Field::make('text', 'cta_link', 'CTA Link'),
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
                    Field::make('rich_text', 'description', 'Description'),
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

    Block::make('Launch CTA')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Launch CTA</h2>'),
            Field::make('text', 'title', 'Title'),
            Field::make('rich_text', 'description', 'Description'),
            Field::make('text', 'btn_title', 'Button Title'),
            Field::make('text', 'btn_link', 'Button Link'),
            Field::make('text', 'footer_text', 'Footer Text'),
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Launch CTA')])
        ->set_description(__('Custom Launch CTA Block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/launch-cta');
        });


    Block::make('Focus Section')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Focus Section</h2>'),
            Field::make('text', 'label', 'Label (e.g. WHY US?)'),
            Field::make('text', 'title', 'Title (Use <span> for purple text)'),
            Field::make('text', 'sub_title', 'Sub Title'),
            Field::make('rich_text', 'description', 'Description'),
            Field::make('complex', 'stats', 'Stats Grid')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('text', 'number', 'Stat Number (e.g. 85+)'),
                    Field::make('textarea', 'label', 'Stat Label'),
                ))
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Focus'), __('Why Us')])
        ->set_description(__('Custom section for agency focus and statistics'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/why-us');
        });

    Block::make('Mission Detail')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Mission Detail</h2>'),
            Field::make('text', 'label', 'Label (e.g. OUR MISSION)'),
            Field::make('text', 'title', 'Title'),
            Field::make('rich_text', 'description', 'Description'),
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Mission'), __('Detail')])
        ->set_description(__('Custom section for mission details with left-aligned text'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/mission-detail');
        });

    Block::make('Included Features')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Included Features</h2>'),
            Field::make('text', 'title', 'Section Title'),
            Field::make('text', 'subtitle', 'Section Subtitle'),

            // Featured Box Header
            Field::make('text', 'brand_title', 'Brand Title (e.g. Scaletopia)'),
            Field::make('text', 'brand_suffix', 'Brand Suffix (e.g. Engine)'),
            Field::make('text', 'box_subtitle', 'Box Subtitle'),
            Field::make('text', 'btn_text', 'Button Text'),
            Field::make('text', 'btn_link', 'Button Link'),

            // Columns
            Field::make('complex', 'columns', 'Feature Columns')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('text', 'col_title', 'Column Title'),
                    Field::make('complex', 'features', 'Features')
                        ->add_fields(array(
                            Field::make('text', 'feature_text', 'Feature Text'),
                        ))
                )),

            // Footer
            Field::make('text', 'footer_text', 'Footer Text'),
            Field::make('text', 'footer_link_text', 'Footer Link Text'),
            Field::make('text', 'footer_link_url', 'Footer Link URL'),
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Included'), __('Features')])
        ->set_description(__('Three-column feature box with branding'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/included-features');
        });
    Block::make('Post-Trial Options')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Post-Trial Options</h2>'),
            Field::make('text', 'label', 'Section Label (e.g. POST-TRIAL OPTIONS)'),
            Field::make('text', 'title', 'Title (Use <span> for purple text)'),
            Field::make('rich_text', 'description', 'Description'),
            Field::make('complex', 'cards', 'Price Cards')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('text', 'card_label', 'Card Label (e.g. MOST CHOSEN)'),
                    Field::make('text', 'price', 'Price (e.g. $400 - $1k)'),
                    Field::make('text', 'price_subtext', 'Price Subtext (e.g. per qualified show)'),
                    Field::make('text', 'commitment', 'Commitment (e.g. 3-MONTH COMMITMENT)'),
                    Field::make('text', 'card_subtitle', 'Card Subtitle (e.g. Quarterly cadence...)'),
                    Field::make('rich_text', 'card_description', 'Card Content'),
                    Field::make('text', 'footer_line', 'Footer Line (Colored text at bottom)'),
                )),
            Field::make('textarea', 'footer_note', 'Bottom Footer Note'),
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Post-Trial'), __('Pricing')])
        ->set_description(__('Custom section for post-pilot pricing options'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/post-trial-options');
        });

    Block::make('Partnership Banner')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Partnership Banner</h2>'),
            Field::make('text', 'title', 'Title (Use <span> for purple text)'),
            Field::make('rich_text', 'description', 'Description'),
            Field::make('text', 'btn_title', 'Button Title'),
            Field::make('text', 'btn_link', 'Button Link'),
            Field::make('text', 'button_description', 'Button Description (Bottom text)'),
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Hero Banner'), __('Partnership')])
        ->set_description(__('Hero-style banner without media or gradients'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/partnership-banner');
        });

    Block::make('Who It\'s For')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Who It\'s For</h2>'),
            Field::make('text', 'section_number', 'Section Number (e.g. 01)'),
            Field::make('text', 'label', 'Section Label (e.g. WHO IT\'S FOR)'),
            Field::make('text', 'title', 'Title (Use <span> for purple text)'),
            Field::make('rich_text', 'description', 'Description'),
            Field::make('complex', 'items', 'Cards')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('image', 'icon', 'Icon'),
                    Field::make('text', 'title', 'Title'),
                    Field::make('textarea', 'description', 'Description'),
                ))
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Who'), __('Agency')])
        ->set_description(__('Custom section for who the service is for'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/who-its-for');
        });

    Block::make('How It Works')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>How It Works</h2>'),
            Field::make('text', 'section_number', 'Section Number (e.g. 02)'),
            Field::make('text', 'label', 'Section Label (e.g. HOW IT WORKS)'),
            Field::make('text', 'title', 'Title (Use <span> for purple text)'),
            Field::make('rich_text', 'description', 'Description'),

            Field::make('complex', 'columns', 'Content Columns')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('text', 'label', 'Column Label (e.g. WHAT YOU OWN)'),
                    Field::make('text', 'heading', 'Column Heading (Use <span> for purple text)'),
                    Field::make('complex', 'list_items', 'List Items')
                        ->add_fields(array(
                            Field::make('text', 'text', 'Item Text'),
                        ))
                ))
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('How'), __('Workflow')])
        ->set_description(__('Two-column comparison section'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/how-it-works');
        });

    Block::make('The Model')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>The Model</h2>'),
            Field::make('text', 'section_number', 'Section Number (e.g. 03)'),
            Field::make('text', 'label', 'Section Label (e.g. THE MODEL)'),
            Field::make('text', 'title', 'Title (Use <span> for purple text)'),
            Field::make('rich_text', 'description', 'Top Description'),

            // Left Column
            Field::make('text', 'content_title', 'Content Column Title (Left)'),
            Field::make('rich_text', 'content_description', 'Content Column Description (Left)'),

            // Right Column
            Field::make('complex', 'cards', 'Right Column Cards')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('text', 'number', 'Card Number (e.g. 01)'),
                    Field::make('text', 'title', 'Card Title'),
                    Field::make('textarea', 'description', 'Card Description'),
                ))
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Model'), __('Economics'), __('Pricing')])
        ->set_description(__('Two-column economics section with cards'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/the-model');
        });

    Block::make('Criteria')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Criteria (Fit)</h2>'),
            Field::make('text', 'section_number', 'Section Number (e.g. 05)'),
            Field::make('text', 'label', 'Section Label (e.g. FIT)'),
            Field::make('text', 'title', 'Title (Use <span> for purple text)'),
            Field::make('rich_text', 'description', 'Description (Top)'),

            Field::make('complex', 'items', 'Criteria Cards')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('text', 'number', 'Card Number (e.g. 01)'),
                    Field::make('text', 'label', 'Card Label (e.g. CRITERION ONE)'),
                    Field::make('text', 'title', 'Card Title (Use <span> for purple text)'),
                    Field::make('rich_text', 'description', 'Card Description'),
                ))
        ))
        ->set_icon('star-filled')
        ->set_keywords([__('Fit'), __('Criteria'), __('Partnership')])
        ->set_description(__('Two-column criteria cards section'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/criteria');
        });
    Block::make('Booking Section')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Booking Section</h2>'),
            Field::make('text', 'label', 'Label (e.g. APPLICATIONS ONLY)'),
            Field::make('text', 'title', 'Title (Use <span> for purple text)'),
            Field::make('rich_text', 'description', 'Description'),
        ))
        ->set_icon('calendar-alt')
        ->set_keywords([__('Booking'), __('Calendly'), __('Qualify')])
        ->set_description(__('Section with header and Calendly embed container'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/booking-section');
        });

    Block::make('Trust Statistics')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2>Trust Statistics</h2>'),
            Field::make('text', 'title', 'Section Title (e.g. Trusted by marketing agencies across the US)'),
            Field::make('complex', 'stats', 'Statistics')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('text', 'number', 'Number (e.g. 85+)'),
                    Field::make('text', 'label', 'Label (e.g. Agencies)'),
                ))
        ))
        ->set_icon('chart-bar')
        ->set_keywords([__('Trust'), __('Stats'), __('Statistics'), __('Numbers')])
        ->set_description(__('Centered statistics section with a title'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/trust-stats');
        });

}




