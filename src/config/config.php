<?php

return [
    "user_admins" => "admin",
    "super_admin_email" => env("SUPER_ADMIN_EMAIL"),
    'roles' => [
        'superadmin' => "Super Admin",
        'admin' => "Admin",
        'staff' => "Staff",
        'editor' => "Editor",
        'member' => "Member",
    ],

    'abilities' => [
        'assign_roles' => 'Assign Roles',
        'manage_users' => 'Manage Users',
        'manage_posts' => 'Manage Posts',
        'manage_admin' => 'Manage Site',
        'manage_systems' => 'Manage Systems',
    ],
    "btn_class" => "btn btn-link btn-sm"

];
