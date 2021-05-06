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


function mc_contact_form()
{

    $content = '';
    $content .= '<h2> Contact Us !! </h2> ';
    $content .= '<label for="fname">First Name</label>';
    $content .= '<input type="text" id="fname" name="firstname" placeholder="Your name.."><br/>';
    $content .= '<label for="lname">Last Name</label>';
    $content .= '  <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br/>';
    $content .= '<label for="email">Email </label>';
    $content .= '  <input type="email" id="email" name="email" placeholder="Your Email.."><br/>';
    $content .= '<label for="subject">Subject</label><br/>';
    $content .= ' <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea><br/>';
    $content .= ' <input type="submit" value="Submit">';



    return $content;



}

// add shortcut 
add_shortcode('s_contact_form', 'mc_contact_form');

function mc_addMenu()
{

    add_menu_page(
        'Contact Form',
        'Contact Form',
        'manage_options',
        'contact-form',
        'displayCode',
    );

}

function displayCode()
{
    echo '<h1>The code : s_contact_form</h1>';
}
add_action('admin_menu', 'mc_addMenu');

// Enqueue style 
function mc_loadmycss() {

    wp_enqueue_style( 'myCSS', plugin_dir_url(__FILE__) .'css/style.css');

}

add_action( 'wp_enqueue_scripts', 'mc_loadmycss' );