<?php

return [
    'plugins' => [
        'EvaluationMethodTechnical' => ['namespace' => 'EvaluationMethodTechnical'],
        'EvaluationMethodSimple' => ['namespace' => 'EvaluationMethodSimple'],
        'EvaluationMethodDocumentary' => ['namespace' => 'EvaluationMethodDocumentary'],
        'EvaluationMethodHomolog' => ['namespace' => 'EvaluationMethodHomolog'],
        'EvaluationMethodTechnicalNa' => ['namespace' => 'EvaluationMethodTechnicalNa'],
        
        'MultipleLocalAuth' => [ 'namespace' => 'MultipleLocalAuth' ],
        'SamplePlugin' => ['namespace' => 'SamplePlugin'],
        'LocationStateCity' => ['namespace' => 'LocationStateCity'],
        'PDFReport' => ['namespace' => 'PDFReport'],
        'SealModelTab' => ['namespace' => 'SealModelTab' ],
        'SealCertified' => [ 
            'namespace' => 'SealCertified',
            'config' => [ 
                'logo-site' => 'img/logo-saude.png' 
            ] 
        ],

    ]
];
