<?php
/*
 * Add my new menu to the Admin Control Panel
 */
// Hook the 'admin_menu' action hook, run the function named 'mfp_Add_My_Admin_Link()'
add_action( 'admin_menu', 'bmu_admin_link' );
// Add a new top level menu link to the ACP
function bmu_admin_link()
{
      add_menu_page(
        'BMU Settings', // Title of the page
        'Build my Universe', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        'includes/bmu-settings.php' // The 'slug' - file to display when clicking the link
    );
}