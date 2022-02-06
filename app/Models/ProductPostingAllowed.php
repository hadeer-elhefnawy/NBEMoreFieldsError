<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPostingAllowed extends Model
{
    use HasFactory;
    protected $fillable = ['role_id','product_allowed','product_code_posting','product_desc_posting',
  
];

    public $table = "product_posting_allowed";

    public function NewAccessMatrix()
    {
        return $this->belongsTo(Fcaccessmatrix::class,"role_id");
    }
}
