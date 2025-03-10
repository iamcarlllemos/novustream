<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketsCategory extends Model
{
    use HasFactory;

    protected $table = 'tickets_category';
    protected $fillable = [
        'category',
        'name'
    ];

}