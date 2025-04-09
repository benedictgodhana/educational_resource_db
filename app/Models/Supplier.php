<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    // The table associated with the model (optional if it's following Laravel's conventions)
    protected $table = 'suppliers';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'contact_email',
    ];

    // Relationship with the Resource model (One Supplier can have many Resources)
    public function resources()
    {
        return $this->hasMany(Resource::class);
    }
}
