<?php

namespace App\Models;

use Illuminate\Support\Arr;

class loan {
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'loan 1',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'loan 2',
                'salary' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'loan 3',
                'salary' => '$40,000'
            ]
        ];
    }

    public static function find(int $id): array
    {
        $loan = Arr::first(static::all(), fn($loan) => $loan['id'] == $id);

        if (! $loan) {
            abort(404);
        }

        return $loan;
    }
}