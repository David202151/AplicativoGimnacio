<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'membresium' => [
        'title' => 'Membresia',

        'actions' => [
            'index' => 'Membresia',
            'create' => 'New Membresium',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nombreMembresia' => 'NombreMembresia',
            'tipoMembresia' => 'TipoMembresia',
            'valorMembresia' => 'ValorMembresia',
            'descripcionMembresia' => 'DescripcionMembresia',
            
        ],
    ],

    'descuento' => [
        'title' => 'Descuento',

        'actions' => [
            'index' => 'Descuento',
            'create' => 'New Descuento',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nombreDescuento' => 'NombreDescuento',
            'fechaInicioDescuento' => 'FechaInicioDescuento',
            'fechaVencimientoDescuento' => 'FechaVencimientoDescuento',
            'valorDescuento' => 'ValorDescuento',
            'descripcion' => 'Descripcion',
            
        ],
    ],

    'cliente' => [
        'title' => 'Cliente',

        'actions' => [
            'index' => 'Cliente',
            'create' => 'New Cliente',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'celular' => 'Celular',
            'email' => 'Email',
            'fechaInicio' => 'FechaInicio',
            'fechaFin' => 'FechaFin',
            'valorTotal' => 'ValorTotal',
            'membresia_id' => 'Membresia',
            'descuento_id' => 'Descuento',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];