<?php

/** @phpstan-ignore-next-line */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Headless News',
    'description' => 'This extension provides integration with news to output content from TYPO3 in JSON format.',
    'state' => 'stable',
    'author' => 'Łukasz Uznański',
    'author_email' => 'extensions@macopedia.com',
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
