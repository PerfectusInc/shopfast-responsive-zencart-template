<?php
/**
 * Shopfast - Premium Zencart Template
 *
 * @package Shopfast Admin File
 * @author Perfectus Web Designs
 * @author website www.elegantdesignhub.com
 * @copyright Copyright 2013-2014 Perfectus Web Designs
 * @license http://www.gnu.org/copyleft/gpl.html   GNU Public License V2.0
 * @version $Id: shopfast.php 1.0
 */

if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

if (function_exists('zen_register_admin_page')) {
    if (!zen_page_key_exists('shopfast')) {
        // Add Color menu to Tools menu
        zen_register_admin_page('shopfast', 'BOX_TOOLS_SHOPFAST','FILENAME_SHOPFAST', '', 'tools', 'Y', 21);
    }
}
?>