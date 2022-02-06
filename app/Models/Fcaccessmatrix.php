<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fcaccessmatrix extends Model
{
    use HasFactory;
        protected $fillable = ['group_name','role_id','role_description','centralizaton_role',
    'status','home_branch_no', 'version_no'];

    public $table = "fc_access_matrix";

        public function maintenances()
    {
        return $this->hasMany(Maintenance::class,"role_id");
    }

    public function reports()
    {
        return $this->hasMany(Reports::class,"role_id");
    }
    public function batchs()
    {
        return $this->hasMany(Batch::class,"role_id");
    }
    public function online()
    {
        return $this->hasMany(Online::class,"role_id");
    }
    public function branchRestriction()
    {
        return $this->hasMany(BranchRestriction::class,"role_id");
    }
    public function accClassRestriction()
    {
        return $this->hasMany(AccClassRestriction::class,"role_id");
    }
    public function grantRights()
    {
        return $this->hasMany(GrantRights::class,"role_id");
    }
    public function queueRights()
    {
        return $this->hasMany(QueueRights::class,"role_id");
    }
    public function passwordRestriction()
    {
        return $this->hasMany(PasswordRestriction::class,"role_id");
    }
    public function branchLimit()
    {
        return $this->hasMany(BranchLimit::class,"role_id");
    }
    public function processStageRights()
    {
        return $this->hasMany(ProcessStageRights::class,"role_id");
    }
    public function webBranch()
    {
        return $this->hasMany(WebBranch::class,"role_id");
    }
    public function productPostingAllowed()
    {
        return $this->hasMany(ProductPostingAllowed::class,"role_id");
    }
    public function productAccessAllowed()
    {
        return $this->hasMany(ProductAccessAllowed::class,"role_id");
    }
    public function groupRestriction()
    {
        return $this->hasMany(GroupRestriction::class,"role_id");
    }
    public function nodeGlRestriction()
    {
        return $this->hasMany(NodeGl::class,"role_id");
    }
    public function ExceptionalLeaf()
    {
        return $this->hasMany(ExceptionalLeafGl::class,"role_id");
    }
}
