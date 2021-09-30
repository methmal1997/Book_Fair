<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrs extends Model
{
    use HasFactory;
    protected $table='carrs';
    protected $primaryKey='id';
    protected $fillable=['name','year','description','image_path'];

}
