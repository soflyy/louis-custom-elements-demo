<?php

/**
 * Plugin Name: Louis Custom Elements
 * Plugin URI: https://louisreingold.com/
 * Description: Example description.
 * Author: Louis
 * Author URI: https://louisreingold.com/
 * License: GPLv2
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 0.0.1
 */

namespace LouisCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'LouisCustomElements',
        'element',
        'Louis Custom Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'LouisCustomElements',
        'macro',
        'Louis Custom Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'LouisCustomElements',
        'preset',
        'Louis Custom Presets',
        false,
    );
},
    // register elements before loading them
    9
);
