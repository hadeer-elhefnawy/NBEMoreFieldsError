<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupRestriction extends Model
{
    use HasFactory;
    protected $fillable = ['role_id','group_code_allowed','group_code','group_descripion',
  
];

    public $table = "group_restriction";

    public function NewAccessMatrix()
    {
        return $this->belongsTo(Fcaccessmatrix::class,"role_id");
    }
}
