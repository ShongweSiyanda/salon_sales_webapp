<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Sales extends Model
{
    //
    protected $fillable=[
        'customer_name',
        'customer_cell_number',
        'stylist_name',
        'hair_style_type',
        'amount_due',
        'date_performed',
    ];
    /*protected $casts = [
        'time_entries'=>'array',
    ];*/
    protected $table = 'sales';
   //public $timestamps = false;
}
