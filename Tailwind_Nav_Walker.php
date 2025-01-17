<?php

class Tailwind_Nav_Walker extends Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= "<ul class=\"absolute left-0 z-50 mt-0 bg-white text-black shadow-lg hidden group-hover:block\">";
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $classes = empty($item->classes) ? array() : (array)$item->classes;
        $classes[] = 'menu-item';
        if (in_array('menu-item-has-children', $classes)) {
            $classes[] = 'group relative';
        }
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= '<li' . $class_names . '>';
        $attributes = !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        $output .= '<a' . $attributes . ' class="block px-4 py-2 hover:bg-blue-700 hover:text-white">' . $item->title;

        if (in_array('menu-item-has-children', $classes)) {
            $output .= ' <span class="ml-2">&#9662;</span>'; // Arrow for sub-menu
        }

        $output .= '</a>';
    }
}
