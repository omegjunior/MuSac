<?php

/**
 * This file was generated by DAMB
 *
 * @copyright   Copyright (c) 2019 - 2020, AXeL-dev
 * @license     GPL
 * @link        https://github.com/AXeL-dev/damb
 */

// Load Dolibarr environment (mandatory)
if (false === (@include_once '../../main.inc.php')) { // From htdocs directory
    require_once '../../../main.inc.php'; // From "custom" directory
}

// Load page & musac lib
dol_include_once('musac/lib/page.lib.php');
dol_include_once('musac/lib/musac.lib.php');

// Control access to page
control_access('$user->admin');

/**
 * View
 */

print_header('Changelog', array('admin', 'musac@musac'), array('{module_folder}/css/changelog.css'));

print_subtitle('Changelog', 'title_generic.png', 'link:modules_list');

print_admin_tabs('Changelog');

load_template('musac/tpl/changelog.tpl.php', array(
    'changelog_file' => dol_buildpath('musac/changelog.json')
));

print_footer(true);
