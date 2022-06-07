<?php

namespace App\Models;

use App\Http\Controllers\CustomerGroupController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $with = ['customergroup'];

    public function groups()
    {
        return $this->hasMany(CustomerGroupController::class);
    }
}
