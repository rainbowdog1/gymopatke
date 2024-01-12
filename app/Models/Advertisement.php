<?php

namespace App\Models;

use App\Enums\ConditionEnum;
use App\Enums\StatusEnum;
use App\Enums\SubjectEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'condition',
        'status',
        'subject',
        'price',
        'class',
        'status',
    ];

    protected $casts = [
        'condition' => ConditionEnum::class,
        'status' => StatusEnum::class,
        'subject' => SubjectEnum::class,
    ];
}
