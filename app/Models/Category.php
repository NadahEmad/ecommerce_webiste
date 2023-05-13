<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=
        [
            'name',
            'tag',
            'image',
            'user_id',
            'created_at',
            'updated_at'
        ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Product::class,'category_id');
    }
    public function categories(): \Illuminate\Database\Eloquent\Collection|array
    {
        return self::with('user')->get();
    }

}
