<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    /** @use HasFactory<\Database\Factories\EmploymentFactory> */
    use HasFactory;

    public static array $experience = ['entry', 'intermediate', 'senior'];

    public static array $category = [
                'IT', 'Finance', 'Sales', 'Marketing'
    ];
}
