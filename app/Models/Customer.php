<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customers';

    public function order(){
		return $this->hasMany('App\Models\Order','customer_id','id');
    }
}
