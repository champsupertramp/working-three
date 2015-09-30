<?php
/**
 * Class WorkingThree_Walker
 *
 * @since  1.0
 */
class WorkingThree_Walker extends Walker_Nav_Menu {

    /**
     * Start Top level
     * @param  string  &$output
     * @param  integer $depth
     * @param  array   $args
     */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu dropdown\" id=\"Dropdown\" style=\"display: none;\">\n";
    }

    /**
     * End Top Level
     * @param  string  &$output
     * @param  integer $depth
     * @param  array   $args
     */
    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    /**
     * Start Element binding
     * @param  string   &$output
     * @param  array    $item
     * @param  integer  $depth
     * @param  array    $args
     * @param  integer  $id
     */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;


        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';


        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        if (in_array("menu-item-has-children", $item->classes)) {
            $id = ' id="dd" tabindex="1"' ;
        }

        $output .= $indent . '<li' . $id . $class_names .'>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';


        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        if (in_array("menu-item-has-children", $item->classes)) {
            $item_output = $args->before;
            $item_output .= '<p class="menu-top-link" onclick="toggle_visibility(\'Dropdown\');">';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= '</p>';
            $item_output .= $args->after;
        }else{
            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;
        }

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

    }

    /**
     * End list element
     * @param  string   &$output
     * @param  array    $item
     * @param  integer  $depth
     * @param  array    $args
     */
    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }

}
?>
