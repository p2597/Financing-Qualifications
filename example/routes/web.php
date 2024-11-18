<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/loans', function () {
    return view('loans', [
        'loans' => [
            [
                'id' => 1,
                'title' => 'Loan 1',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Loan 2',
                'salary' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'Loan 3',
                'salary' => '$40,000'
            ]
        ]
    ]);
});

Route::get('/loans/{id}', function ($id) {
    $loans = [
        [
            'id' => 1,
            'title' => 'Loan 1',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
            'title' => 'Loan 2',
            'salary' => '$10,000'
        ],
        [
            'id' => 3,
            'title' => 'Loan 3',
            'salary' => '$40,000'
        ]
    ];

    $loan = Arr::first($loans, fn($loan) => $loan['id'] == $id);

    return view('loan', ['loan' => $loan]);
});

Route::get('/contact', function () {
    return view('contact');
});