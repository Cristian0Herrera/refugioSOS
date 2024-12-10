<?php

return [

    'title' => 'Acceso',

    'heading' => 'Iniciar sesión',

    'actions' => [

        'register' => [
            'before' => 'o',
            'label' => 'Crear una cuenta',
        ],

        'request_password_reset' => [
            'label' => '¿Olvidaste tu contraseña?',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'Correo electrónico',
        ],

        'password' => [
            'label' => 'Contraseña',
        ],

        'remember' => [
            'label' => '  ',
        ],

        'actions' => [

            'authenticate' => [
                'label' => 'Iniciar sesión',
            ],

        ],

    ],

    
    'messages' => [

        'email' => 'Correo electrónico no válido',
        'password' => 'Contraseña incorrecta',

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Demasiados intentos. Intente de nuevo en :seconds segundos.',
            'body' => 'Intente de nuevo en :seconds segundos.',
        ],

    ],

];
