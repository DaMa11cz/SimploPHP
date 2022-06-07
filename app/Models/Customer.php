<?php

namespace App\Models;

use App\Http\Controllers\CustomerGroupController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    //protected $with = ['customergroups'];
    //protected $fillable = ['first_name'];

    public function customergroups()
    {
        return $this->hasMany(CustomerGroup::class, "customer_groups_id");
    }
}
