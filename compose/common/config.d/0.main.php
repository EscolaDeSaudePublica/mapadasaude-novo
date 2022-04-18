<?php 
use MapasCulturais\i;

return [
    'app.siteName' => env('SITE_NAME', i::__('Mapa da Saúde')),
    'app.siteDescription' => env('SITE_DESCRIPTION', i::__('Mapa da Saúde.')),
    
    // 'themes.active' => 'MapasCulturais\Themes\BaseV1',
    'themes.active' => 'Saude',

    'app.lcode' => env('APP_LCODE', 'pt_BR,es_ES'),

    'namespaces' => array(
        'MapasCulturais\Themes' => THEMES_PATH,
        'MapasCulturais\Themes\BaseV1' => THEMES_PATH . 'BaseV1/',
        'Subsite' => THEMES_PATH . 'Subsite/',
    ),

    'doctrine.database' => [
        'host'           => env('DB_HOST', 'db'),
        'dbname'         => env('DB_NAME', 'mapas'),
        'user'           => env('DB_USER', 'mapas'),
        'password'       => env('DB_PASS', 'mapas'),
        'server_version' => env('DB_VERSION', 10),
    ],
    'app.enabled.events' => false,
    'app.enabled.subsite' => false,
    'app.enabled.apps' => false
];