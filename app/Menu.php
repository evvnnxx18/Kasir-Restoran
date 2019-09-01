<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Kyslik\ColumnSortable\Sortable;


class Menu extends Model
{
    protected $table = 'menus';
    // use Sortable;
    protected $fillable = ['id', 'nama_menu', 'harga', 'created_at', 'update_at'];

    public function orders()
    {
        return $this->hasOne('App\Order');
    }

    public function transaction()
    {
        return $this->hasMany('App\Transaction');
    }
}
