<?php

/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen. 
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 */
return [
    'debug' => true,

    'd4l' => [
        'static_site_generator' => [
            'endpoint' => 'build-static',
            'output_folder' => './static',
            'preserve' => [],
            'base_url' => '/',
            'skip_media' => false
        ]
    ]
];
