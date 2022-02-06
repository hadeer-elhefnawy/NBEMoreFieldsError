<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Online extends Model
{
    use HasFactory;
    protected $fillable = ['role_id','role_function_online','main_menu_online','sub_menu1_online',
    'sub_menu2_online','online_description','new_online','copy_online','delete_online',
    'close_online','unlock_online','reopen_online','print_online','auth_online','reverse_online',
    'rollover_online','confirm_online','liquidate_online','hold_online','template_online',
    'view_online'
];

    public $table = "online";

    public function NewAccessMatrix()
    {
        return $this->belongsTo(Fcaccessmatrix::class,"role_id");
    }
}
