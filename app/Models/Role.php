<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends BaseModel
{
    protected $fillable = [
        'uuid',
        'name',
        'label'
    ];
}
