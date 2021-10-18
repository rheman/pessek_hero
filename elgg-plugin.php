<?php

return [
        'plugin' => [
                'version' => '4.0',
		'name' => 'Pessek Hero',
        ],
	'bootstrap' => \hypeJunction\Hero\Bootstrap::class,
	'actions' => [
		'cover/upload' => [
			'controller' => \hypeJunction\Hero\CoverUploadAction::class,
		],
	],
	'routes' => [
		'cover:upload' => [
			'path' => '/cover/upload/{guid}',
			'resource' => 'hero/cover/upload',
		],
	],
];
