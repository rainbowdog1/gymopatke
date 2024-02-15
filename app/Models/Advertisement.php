<?php

namespace App\Models;

use App\Enums\CleanlinessEnum;
use App\Enums\ConditionEnum;
use App\Enums\StatusEnum;
use App\Enums\SubjectEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'condition',
        'status',
        'subject',
        'price',
        'cleanliness',
        'photo_path',
    ];

    protected $casts = [
        'condition' => ConditionEnum::class,
        'status' => StatusEnum::class,
        'subject' => SubjectEnum::class,
        'cleanliness' => CleanlinessEnum::class,
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function getImage() {
        Storage::get('ads/'. $this->user->id . '/' . $this->id);
    }
}
