<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    // The table associated with the model (optional if it's following Laravel's conventions)
    protected $table = 'beneficiaries';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'type', // (School, Library, Student)
        'location',
    ];

    // Relationship with Distribution model (A Beneficiary can receive multiple Resources)
    public function distributions()
    {
        return $this->hasMany(Distribution::class);
    }

    // Relationship with Resource model (Many-to-many relationship with Resources through Distribution)
    public function resources()
    {
        return $this->belongsToMany(Resource::class, 'distributions')
                    ->withPivot('quantity', 'date_distributed');
    }
}
