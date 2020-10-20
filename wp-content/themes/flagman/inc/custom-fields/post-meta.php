<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('carbon_fields_register_fields', 'crb_attach_post_meta');
function crb_attach_post_meta()
{

    // Страницы
    Container::make('post_meta', __('Настройка блока'))
        ->show_on_page('7')
        ->add_fields(array(
            Field::make('text', 'crb_bl_title', __('Заголовок'))->set_width(50),
            Field::make('text', 'crb_bl_price', __('Цена'))->set_width(50),
            Field::make("checkbox", "crb_show_hit", "Хит продаж"),
            Field::make('complex', 'crb_bl_diametr', __('Диаметр'))
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('text', 'crb_bl_diametr_raz', __('Размер')),
                )),
            Field::make('complex', 'crb_bl_pack', __('Упаковка'))
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('text', 'crb_bl_pack_ves', __('Вес')),
                ))

        ));

    // Страницы

}
