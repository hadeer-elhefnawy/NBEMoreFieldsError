<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrantRights extends Model
{
    use HasFactory;
    protected $fillable = ['role_id','cancel','change_node','release','change_media',
    'branch_move', 'hold_branch_rights', 'test_input', 'change_address', 'reinstate',
    'change_priority','auth_cancel', 'auth_change_node','release2','change_media2', 
    'auth_branch_move', 'hold_branch_rights2', 'auth_test_input', 'change_address2',
    'auth_reinstate', 'change_priority2', 'install', 'test_check','link_contract',
    'change_branch_in','change_message','change_force_release_fund','suppress',
    'delete_branch_rights','print_branch_rights','ft_upload','move_to_queue',
    'change_address_in','auth_change_message','auth_rights','change_force_cover_match'
];

    public $table = "grant_rights";

    public function NewAccessMatrix()
    {
        return $this->belongsTo(Fcaccessmatrix::class,"role_id");
    }
}
