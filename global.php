<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overridding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

{
return array(
    //other settings here
	// then add phpSettings
	
	'phpSettings'   => array(
        'display_startup_errors'        => true,
        'display_errors'                => true,
        'error_reporting'               => E_ALL | E_STRICT,
        'max_execution_time'		    => 60,
		'date.timezone'                 => 'Europe/Amsterdam',
    ),
);
}
