<?php

return [
    '/' => 'site/index',
    '/signup' => 'site/signup',
    '/login' => 'site/login',
    '/listing' => 'site/listing',
    '/logout' => 'site/logout',

    '<controller>' => '<controller>/index',
    '<controller>/create' => '<controller>/create',
    '<controller>/update/<id:\d+>' => '<controller>/update',
    '<controller>/delete/<id:\d+>' => '<controller>/delete',
    '<controller>/view/<id:\d+>' => '<controller>/view',
    '<controller>/search' => '<controller>/search',
];
