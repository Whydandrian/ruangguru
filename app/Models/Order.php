<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
    'packageId',
    'customerId',
    'orderStatus',
    ];
    public $timestamps = false;
    public function setUpdatedAt($value)
    {
        return NULL;
    }
    public function setCreatedAt($value)
    {
        return NULL;
    }
}
