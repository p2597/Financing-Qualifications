<?php

use Illuminate\Support\Facades\Route;
use App\Models\Loan;

Route::get('/', function () {
    return view('home');
});

Route::get('/loans', function () {
    return view('loans', [
        'loans' => Loan::all()
    ]);
});

Route::get('/loans/{id}', function ($id) {
    $loan = Loan::find($id);

    return view('loan', ['loan' => $loan]);
});

Route::get('/contact', function () {
    return view('contact');
});