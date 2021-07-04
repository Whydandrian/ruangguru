<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['customerId', 'customerName','customerEmail','customerPhoneNumber','customerAddress'];
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
