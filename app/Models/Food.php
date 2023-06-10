<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Food extends Model
{
    use HasFactory;
    protected $table = 'foods';
    protected $primaryKey = 'id';
    // if you  do not want to use created_at/updated_at ?
    public $timestamps = true;
//    protected $dateFormat = 'h:m:s';
    protected $fillable = ['name', 'count', 'description'];

}
