<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone_no', 'address', 'status'];

    public function products()
    {
        return $this->hasMany(OrderDetail::class, "customer_id", 'id');
    }
}
