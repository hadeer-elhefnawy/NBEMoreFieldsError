<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NodeGl extends Model
{
    use HasFactory;
    protected $fillable = ['role_id','gl_allowed_node','node_gl_node',
    'node_gl_descripion_en_node','node_gl_descripion_ar_node',
  
];

    public $table = "node_gl";

    public function NewAccessMatrix()
    {
        return $this->belongsTo(Fcaccessmatrix::class,"role_id");
    }


}











    // public function maintenances()
    // {
    //     return $this->hasMany(Maintenance::class,"fc_id");
    // }

    // public function NewAccessMatrix()
    // {
    //     return $this->belongsTo(NewAccessMatrix::class,"fc_id");
    // }
