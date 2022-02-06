<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchRestriction extends Model
{
    use HasFactory;
    protected $fillable = ['role_id','branch_restriction','branch','branch_name'];

    public $table = "branch_restriction";

    public function NewAccessMatrix()
    {
        return $this->belongsTo(Fcaccessmatrix::class,"role_id");
    }
}
