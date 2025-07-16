<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = 'panel_config';
    protected $fillable = [
        'config_key',
        'config_value'
    ];
}
