<?php

return [
    'image' => [
        'no_image' => "/storage/default/no-image-available-grid.png",
        'no_avatar' => "/storage/users/no_avatar-%s.jpg",
        'no_avatar_male' => "/storage/users/no_avatar-male.jpg",
        'no_avatar_female' => "/storage/users/no_avatar-female.jpg",
    ],
    'admin' => [
        'index' => [
            'icon' => "ListIcon",
            'route' => "admin.%s.index",
            'class' => "h-5 w-5 mr-4 hover:text-primary cursor-pointer",
        ],
        'edit' => [
            'icon' => "Edit3Icon",
            'route' => "admin.%s.edit",
            'class' => "h-5 w-5 mr-4 hover:text-primary cursor-pointer",
        ],
        'show' => [
            'function' => "showRecord",
            'icon' => "EyeIcon",
            'route' => "admin.%s.show",
            'class' => "h-5 w-5 mr-4 hover:text-primary cursor-pointer",
        ],
        'create' => [
            'function' => "createRecord",
            'icon' => "PlusIcon",
            'route' => "admin.%s.create",
            'class' => "h-5 w-5 mr-4 hover:text-primary cursor-pointer",
        ],
        'destroy' => [
            'function' => "confirmDeleteRecord",
            'icon' => "Trash2Icon",
            'route' => "admin.%s.destroy",
            'class' => "h-5 w-5 mr-4 hover:text-primary cursor-pointer",
        ]
    ]
];
