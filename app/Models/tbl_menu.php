<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_menu extends Model
{
    protected $table = 'tbl_menus' //table name
    protected $primaryKey = 'mid'
    
    use HasFactory;
}
