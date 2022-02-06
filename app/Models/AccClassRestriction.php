<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccClassRestriction extends Model
{
    use HasFactory;
    protected $fillable = ['role_id','acc_class_restriction','acc_class','acc_class_description'];

    public $table = "acc_class_restriction";

    public function NewAccessMatrix()
    {
        return $this->belongsTo(Fcaccessmatrix::class,"role_id");
    }
}
