<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Model properties and methods would go here
    public function seller(){
        // Define inverse one-to-one or many relationship with Seller model
        return $this->belongsTo('App\Models\Seller');

        // if we have different column name for foreign key
        // return $this->belongsTo('App\Models\Seller', 'foreign_key_column', 'owner_key_column');
    }
}
