<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordRestriction extends Model
{
    use HasFactory;
    protected $fillable = [
        'role_id','password_restriction'
    ];

    public $table = "password_restriction";

    public function NewAccessMatrix()
    {
        return $this->belongsTo(Fcaccessmatrix::class,"role_id");
    }
}
