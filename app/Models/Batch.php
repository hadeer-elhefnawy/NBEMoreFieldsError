<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;
    protected $fillable = ['role_id','role_function_batch','main_menu_batch','sub_menu1_batch',
    'sub_menu2_batch','batch_description','new_batch','copy_batch','delete_batch',
    'close_batch','unlock_batch','reopen_batch','print_batch','auth_batch','reverse_batch',
    'rollover_batch','confirm_batch','liquidate_batch','hold_batch','template_batch',
    'view_batch','generate_batch'
];

    public $table = "batchs";

    public function NewAccessMatrix()
    {
        return $this->belongsTo(Fcaccessmatrix::class,"role_id");
    }
}
