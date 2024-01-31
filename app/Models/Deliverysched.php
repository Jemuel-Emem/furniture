<?php

namespace App\Models;
use App\Models\Cart ;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deliverysched extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'name', 'address', 'phonenumber', 'productlist', 'totalorder', 'schedule'
    ];


public function carts()
{
        return $this->belongsTo(Cart::class, 'id');
}

    public function user()
{
    return $this->belongsToMany(User::class, 'user_id');
}
}
