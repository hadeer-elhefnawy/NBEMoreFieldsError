<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAccessAllowed extends Model
{
    use HasFactory;
    protected $fillable = ['role_id','product_access','product_code_access','product_desc_access',
  
];

    public $table = "product_access_allowed";

    public function NewAccessMatrix()
    {
        return $this->belongsTo(Fcaccessmatrix::class,"role_id");
    }
}
