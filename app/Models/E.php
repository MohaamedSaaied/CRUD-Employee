<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class E extends Model
{
    use HasFactory;
    public $table ='es';
    public $timestamps = false;
    public $fillable=['id','name','salary'];
}
