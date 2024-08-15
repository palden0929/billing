<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    // Table Name
    // Model name will be Singular, table's name will be plural
    protected $table = "parties";

    // Primary key
    protected $primarykey = "id";

    // Fillable columns
    // Whenever we record in the database "full_name" is mandatory
    protected $fillable = array("full_name","phone_no","city","address");
    use HasFactory;
}
