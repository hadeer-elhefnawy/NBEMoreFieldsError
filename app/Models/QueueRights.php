<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QueueRights extends Model
{
    use HasFactory;
    protected $fillable = [
        'role_id','queue_rights'
    ];

    public $table = "queue_rights";

    public function NewAccessMatrix()
    {
        return $this->belongsTo(Fcaccessmatrix::class,"role_id");
    }
}
