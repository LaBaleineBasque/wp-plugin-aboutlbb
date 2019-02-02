<?php

/**
 * Plugin Name:         About La Baleine Basque
 * Plugin URI:          https://labaleinebasque.fr
 * Description:         Informations de contact sur La Baleine Basque, agence ayant développé ce site
 * Author:              La Baleine Basque
 * Author URI:          https://labaleinebasque.fr
 *
 * Version:             0.0.1
 * Requires at least:   3.8.0
 * Tested up to:        5.0
 *
 *
 * @category            Plugin
 * @copyright           Copyright © 2019 Matthieu Girard
 * @author              Matthieu Girard
 * @package             LaBaleineBasqueToolbox
*/

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

add_action('admin_menu','about_lbb_menu');

function about_lbb_menu(){
    add_menu_page(
        'About La Baleine Basque', 
        'La Baleine Basque', 
        'manage_options', 
        'la-baleine-basque-infos-agence-web', 
        'test_init', 
        plugins_url( 'aboutlbb/assets/logo.svg' )
    );
}

function test_init(){
      echo"<h1>La Baleine Basque - Agence Web - Informations sur ce site</h1>";
}

?>