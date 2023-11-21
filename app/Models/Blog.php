<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    
    public $guarded = [];

    protected function createdAt(): Attribute
    {
        return Attribute::get(fn ($value) => Carbon::parse($value)->format('F j, Y, g:i A'));
    }
}
