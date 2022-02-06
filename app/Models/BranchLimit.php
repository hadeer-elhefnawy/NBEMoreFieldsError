<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchLimit extends Model
{
    use HasFactory;
    protected $fillable = ['role_id','authorizer_role','limit_currency','user_limit'];

    public $table = "branch_limit";

    public function NewAccessMatrix()
    {
        return $this->belongsTo(Fcaccessmatrix::class,"role_id");
    }
}
