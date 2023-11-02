<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class OrderDetail extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = ['name', 'email', 'phone_no', 'address', 'order_details', 'status'];
    protected $dates = ['deleted_at'];
}
