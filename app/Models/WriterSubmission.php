<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WriterSubmission extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'script_title',
        'genre',
        'logline',
        'synopsis',
        'script_file_path',
    ];
}
