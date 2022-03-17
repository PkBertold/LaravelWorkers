<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = "más_táblanév";
    protected $primaryKey = "más_id";
    protected $keyType = "string";
    public $incrementing = false;
    const CREATED_AT = "más_név_a_lértrehozásnak";
    const UPDATED_AT = "más_név_a_módosításnak";
    public $timestamps = false;
}
