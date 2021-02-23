<?php

return [
    '/' => 'site/index',
    '/login' => 'site/login',
    '/logout' => 'site/logout',

    '/client' => 'user/index',
    '/client/create' => 'user/create',
    '/client/update/<id:\d+>' => 'user/update',
    '/client/delete/<id:\d+>' => 'user/delete',
    '/client/view/<id:\d+>' => 'user/view',
    '/client/search' => 'user/search',

    '<controller>' => '<controller>/index',
    '<controller>/create' => '<controller>/create',
    '<controller>/update/<id:\d+>' => '<controller>/update',
    '<controller>/delete/<id:\d+>' => '<controller>/delete',
    '<controller>/view/<id:\d+>' => '<controller>/view',
    '<controller>/search' => '<controller>/search',
];