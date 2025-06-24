<?php

/** @phpstan-ignore-next-line */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Headless News Integration for TYPO3',
    'description' => 'Integrates the TYPO3 News system with headless output, allowing you to deliver news content in clean JSON format for frontend apps and frameworks.',
    'state' => 'stable',
    'author' => 'Team T3Planet',
    'author_email' => 'info@t3planet.de',
    'category' => 'fe',
    'internal' => '',
    'version' => '13.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-13.5.99',
            'frontend' => '12.0.0-13.5.99',
        ],
        'conflicts' => [],
        'suggests' => [
            'headless' => '2.0.0-4.9.9',
        ],
    ],
];
