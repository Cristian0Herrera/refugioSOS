<?php

return [

    'title' => 'Registrarse',

    'heading' => 'Crear una cuenta',

    'actions' => [

        'login' => [
            'before' => 'o',
            'label' => 'iniciar sesión en su cuenta',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'Correo electrónico',
        ],

        'name' => [
            'label' => 'Nombre',
        ],

        'password' => [
            'label' => 'Contraseña',
            'validation_attribute' => 'contraseña',
            'current_password' => 'The password is incorrect.',
            'min' => [
        'array' => 'The :attribute field must have at least :min items.',
        'file' => 'The :attribute field must be at least :min kilobytes.',
        'numeric' => 'The :attribute field must be at least :min.',
        'string' => 'The :attribute field must be at least :min characters.',
    ],

        ],

        'password_confirmation' => [
            'label' => 'Confirmar contraseña',
            'current_password' => 'The password is incorrect.',
            'min' => [
        'array' => 'The :attribute field must have at least :min items.',
        'file' => 'The :attribute field must be at least :min kilobytes.',
        'numeric' => 'The :attribute field must be at least :min.',
        'string' => 'The :attribute field must be at least :min characters.',
    ],

        ],

        'actions' => [

            'register' => [
                'label' => 'Registrarse',
            ],

        ],

        'messages' => [

            'failed' => 'contraseña incorrecta',
            'current_password' => 'The password is incorrect.',
            'min' => [
        'array' => 'The :attribute field must have at least :min items.',
        'file' => 'The :attribute field must be at least :min kilobytes.',
        'numeric' => 'The :attribute field must be at least :min.',
        'string' => 'The :attribute field must be at least :min characters.',
    ],

    
        ],

    ],

    'min' => [
        'array' => 'The :attribute field must have at least :min items.',
        'file' => 'The :attribute field must be at least :min kilobytes.',
        'numeric' => 'The :attribute field must be at least :min.',
        'string' => 'The :attribute field must be at least :min characters.',
    ],


    'notifications' => [

        'throttled' => [
            'title' => 'Demasiados intentos de registro',
            'body' => 'Por favor, inténtelo de nuevo en :seconds segundos.',
        ],

    ],

];
