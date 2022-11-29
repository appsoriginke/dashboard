<?php
return [
    'navigations' => [
        'dashboard' => [
            'url' => 'dashboard',
            'icon' => 'heroicon-o-home',
            'canAccess' => "dashboard_browse",
        ],

    ],
    'permissions' => [
        'dashboard' => [
            'browse',
        ],
        'users' => [
            'browse',
            'read',
            'add',
            'edit',
            'deactivate'
        ],
    ],
];
