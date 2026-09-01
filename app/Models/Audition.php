<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audition extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'gender',
        'city',
        'experience',
        'message',
        'video_link',
        'profile_picture',
    ];
    
}
