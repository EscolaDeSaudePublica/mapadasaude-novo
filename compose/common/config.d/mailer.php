<?php
use \MapasCulturais\i;

return [
    'mailer.user'       => env('MAILER_USER', "admin@mapasculturais.org"),
    'mailer.psw'        => env('MAILER_PASS', "password"),
    'mailer.protocol'   => env('MAILER_PROTOCOL', ''),
    'mailer.server'     => env('MAILER_SERVER', 'localhost'),
    'mailer.port'       => env('MAILER_PORT', '465'),
    'mailer.from'       => env('MAILER_FROM', 'suporte@mapasculturais.org'),
    'mailer.alwaysTo'   => env('MAILER_ALWAYSTO', false),
    'mailer.streamOptionsVerifyPeer' => env('MAILER_STREAMOPTIONS_VERIFYPEER', null),

    'mailer.templates' => [
        'welcome' => [
            'title' => i::__("Bem-vindo(a) ao Mapa da Saúde"),
            'template' => 'welcome.html'
        ],
        'last_login' => [
            'title' => i::__("Acesse a Mapa da Saúde"),
            'template' => 'last_login.html'
        ],
        'new' => [
            'title' => i::__("Novo registro"),
            'template' => 'new.html'
        ],
        'update_required' => [
            'title' => i::__("Acesse a Mapa da Saúde"),
            'template' => 'update_required.html'
        ],
        'compliant' => [
            'title' => i::__("Denúncia - Mapa da Saúde"),
            'template' => 'compliant.html'
        ],
        'suggestion' => [
            'title' => i::__("Mensagem - Mapa da Saúde"),
            'template' => 'suggestion.html'
        ],
        'seal_toexpire' => [
            'title' => i::__("Selo Certificador Expirando"),
            'template' => 'seal_toexpire.html'
        ],
        'seal_expired' => [
            'title' => i::__("Selo Certificador Expirado"),
            'template' => 'seal_expired.html'
        ],
        'opportunity_claim' => [
            'title' => i::__("Solicitação de Recurso de Oportunidade"),
            'template' => 'opportunity_claim.html'
        ],
        'request_relation' => [
            'title' => i::__("Solicitação de requisição"),
            'template' => 'request_relation.html'
        ],
        'registration_confirm_default' => [
            'title' => i::__("Confirmação de inscrição"),
            'template' => 'registration_confirm_default.html'
        ],
        'registration_confirm_custom' => [
            'title' => i::__("Confirmação de inscrição"),
            'template' => 'registration_confirm_custom.html'
        ]
    ]

];