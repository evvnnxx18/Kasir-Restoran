<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // use portable;
    protected $table = 'orders';
    protected $fillable = ['id', 'menu_id', 'costumer_id', 'harga_menu','total', 'total_harga', 'user_id', 'created_at', 'update_at'];
    
    public function menu()
    {
        return $this->belongsTo('App\Menu');
    }

    public function costumer()
    {
        return $this->belongsTo('App\Costumer');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function transaction()
    {
        return $this->belongsTo('App\Transaction');
    }

    public function transaction_get()
    {
        return $this->belongsTo('App\transaction');
    }
}
