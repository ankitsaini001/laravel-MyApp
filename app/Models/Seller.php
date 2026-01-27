<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    // Model properties and methods would go here
    public function productData(){
        // Define one-to-one relationship with Product model
        return $this->hasOne('App\Models\Product');

        // if we have different column name for foreign key
        // return $this->hasOne('App\Models\Product', 'foreign_key_column', 'local_key_column');
    }

    public function productsData(){
        // Define one-to-many relationship with Product model
        return $this->hasMany('App\Models\Product');

        // if we have different column name for foreign key
        // return $this->hasMany('App\Models\Product', 'foreign_key_column', 'local_key_column');
    }
}
