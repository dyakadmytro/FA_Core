<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroData extends Model
{
    use HasFactory;
    public const CREATED_AT = null;
    public const UPDATED_AT = null;

    protected $fillable = [
        'name',
        'nick',
        'description',
        'profile_img',
        'health',
        'strength',
        'agility',
        'luck',
    ];

//    protected $hidden = [
//        'created_at',
//        'updated_at',
//    ];

    public function hero() {
        return $this->belongsTo(Hero::class);
    }
}
