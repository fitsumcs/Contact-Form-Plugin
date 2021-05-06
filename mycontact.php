<?php
/**
 * Plugin Name:       Simple Contact Form
 * Plugin URI:        https://contactform.com
 * Description:       A simple contact form plugin that is used for displaying a contact form 
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Fitsum A. 
 * Author URI:        https://fa.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 */

defined('ABSPATH') or die("You are missing the path man :) ");


function mc_addcontact_form()
{

    $content = '';
    $content .= 'HELLO WORLD';



    return $content;



}

// add shortcut 
add_shortcode('s_contact_form', 'mc_addcontact_form');