<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personell extends Model
{
    /** @use HasFactory<\Database\Factories\PersonellFactory> */
    use HasFactory;

    protected $fillable = ['rank', 'FirstName' , 'LastName', 'division', 'title', 'image'];

    protected $primaryKey = "userId";
}
