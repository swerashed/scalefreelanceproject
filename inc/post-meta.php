<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');

function crb_attach_theme_options()
{
    // Case Study Post Meta Fields author image, author name, author position, author Quote, Services, Target Audience, Results, Quote, Cards Items -> Count, Title, Description
    Container::make('post_meta', 'Case Study Meta')
        ->where('post_type', '=', 'case_study')
        ->add_fields(array(
            Field::make('html', 'crb_information_text')
                ->set_html('<h2><b>Banner Section</b></h2>'),
            Field::make('image', 'logo', 'Logo'),
            Field::make('text', 'tag', 'Tag'),
            Field::make('text', 'services', 'Services'),
            Field::make('text', 'target_audience', 'Target Audience'),
            Field::make('complex', 'top_cards_items', 'Banner Cards Items')
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('text', 'title', 'Title'),
                    Field::make('text', 'description', 'Description'),
                )),

            Field::make('html', 'crb_case_study_content_text')
                ->set_html('<h2><b>Case Study Content Section</b></h2>'),
            Field::make('text', 'video', '(Youtube) Video'),
            Field::make('image', 'client_message_screenshot', 'Client Message Screenshot'),
            Field::make('complex', 'info_cards_items', 'Info Cards Items')
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('text', 'title', 'Title'),
                    Field::make('text', 'description', 'Description'),
                )),

            Field::make('html', 'crb_result_card_text')->set_html('<h2><b>Result Cards Section</b></h2>'),
            Field::make('complex', 'result_cards_items', 'Result Cards Items')
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('text', 'title', 'Title'),
                    Field::make('text', 'description', 'Description'),
                )),
            Field::make('html', 'crb_sidebar_card_text')
                ->set_html('<h2><b>Sidebar Card Section</b></h2>'),
            Field::make('rich_text', 'quote', 'Quote'),
            Field::make('image', 'author_image', 'Author Image'),
            Field::make('text', 'author_name', 'Author Name'),
            Field::make('text', 'author_position', 'Author Position'),

            Field::make('html', 'crb_launch_cta_text')
                ->set_html('<h2><b>Launch CTA Section</b></h2>'),
            Field::make('rich_text', 'launch_cta_title', 'Title'),
            Field::make('textarea', 'launch_cta_description', 'Description'),
            Field::make('text', 'launch_cta_btn_title', 'Button Title'),
            Field::make('text', 'launch_cta_btn_link', 'Button Link'),
            Field::make('text', 'launch_cta_footer_text', 'Footer Text'),
        ));
}
