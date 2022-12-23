<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\Like;
use App\Models\User;
use App\Models\Favorite;
use App\Models\Pictures;


class Nests extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nest',
        'name',
        'type',
        'category',
        'condition',
        'price',
        'description',
        'location',
        'image',
        'tag',
        'latitude',
        'longitude',
        'unique',
    ];
}