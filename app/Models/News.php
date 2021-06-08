<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['name','type', 'short_desc', 'description', 'content','image', 'status','createddate'];

}
