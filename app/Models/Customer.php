<?php

namespace App\Models;

use App\Http\Controllers\CustomerGroupController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $casts = ['customer_groups_id' => 'array'];
    protected $with = ['customergroups'];
    protected $fillable = ['customer_groups_id'];

    public function customergroups()
    {
        return $this->hasMany(CustomerGroup::class,'id','customer_groups_id');
    }
}
