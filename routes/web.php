<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login.index');
});

Route::get('/register', function () {
    return view('register.index');
});

Route::get('contacts', function(){

    $employees = [
        ['name' => 'Budi Santoso', 'position' => 'Software Engineer', 'department' => 'IT', 'email' => 'budi.santoso@company.com'],
        ['name' => 'Siti Nurhaliza', 'position' => 'HR Manager', 'department' => 'Human Resources', 'email' => 'siti.nurhaliza@company.com'],
        ['name' => 'Andi Prasetyo', 'position' => 'Marketing Coordinator', 'department' => 'Marketing', 'email' => 'andi.prasetyo@company.com'],
        ['name' => 'Rina Wulandari', 'position' => 'Finance Analyst', 'department' => 'Finance', 'email' => 'rina.wulandari@company.com'],
        ['name' => 'Joko Susilo', 'position' => 'Web Developer', 'department' => 'IT', 'email' => 'joko.susilo@company.com'],
        ['name' => 'Dewi Lestari', 'position' => 'Graphic Designer', 'department' => 'Design', 'email' => 'dewi.lestari@company.com'],
        ['name' => 'Eko Yulianto', 'position' => 'Sales Executive', 'department' => 'Sales', 'email' => 'eko.yulianto@company.com'],
        ['name' => 'Tina Melati', 'position' => 'Product Manager', 'department' => 'Product', 'email' => 'tina.melati@company.com'],
        ['name' => 'Rudi Hartono', 'position' => 'Customer Support', 'department' => 'Support', 'email' => 'rudi.hartono@company.com'],
        ['name' => 'Fitriani Rizky', 'position' => 'Data Scientist', 'department' => 'Data', 'email' => 'fitriani.rizky@company.com'],
    ];

    return view('contact.index', ['data' => $employees]);
});

