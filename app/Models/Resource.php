<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    // The table associated with the model (optional if it's following Laravel's conventions)
    protected $table = 'resources';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'type',
        'quantity',
        'supplier_id',
    ];

    // Relationship with the Supplier model (One Resource belongs to one Supplier)
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    // Relationship with the Distribution model (One Resource can have many Distributions)
    public function distributions()
    {
        return $this->hasMany(Distribution::class);
    }
}
