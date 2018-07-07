<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;




// Add second options page under 'Basic Options'
Container::make( 'theme_options', 'Настройки темы' )
    ->set_icon('dashicons-palmtree')
    ->add_tab( 'Шапка', array(
        Field::make( 'image', 'est_header_logo', 'Логотип' ),
        /**
         * Ширина поля
         */
//            ->set_width( 30 ),
        Field::make( 'text', 'est_site_name', 'Название сайта' )
            ->set_width( 70 ),
        Field::make( 'text', 'est_site_desc', 'Описание сайта' )
            ->set_width( 70 ),
    ) )
    ->add_tab( 'Подвал', array(
        Field::make( 'text', 'est_footer_text', 'Текст в футере' ),

    ) );

