<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $with = ['customergroups'];


    public function customergroups()
    {
        return $this->hasManyThrough(CustomerGroup::class,CustomerRelation::class,'customer_id','id','id','customer_group_id');
    }
}
