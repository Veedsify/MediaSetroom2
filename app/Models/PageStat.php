<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageStat extends Model
{
    protected $fillable = ['page', 'count', 'date', 'ip'];
}
