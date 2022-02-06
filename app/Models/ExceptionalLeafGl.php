<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExceptionalLeafGl extends Model
{
    use HasFactory;
    protected $fillable = ['role_id','gl_allowed_exceptional','node_gl_exceptional',
    'node_gl_descripion_en_exceptional','node_gl_descripion_ar_exceptional','exceptional_leaf_gl',
    'leaf_gl_description_en_exceptional','leaf_gl_description_ar_exceptional'
  
];

    public $table = "exceptional_leaf_gl";

    public function NewAccessMatrix()
    {
        return $this->belongsTo(Fcaccessmatrix::class,"role_id");
    }
}
