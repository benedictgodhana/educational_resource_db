<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    // The table associated with the model (optional if it's following Laravel's conventions)
    protected $table = 'donors';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'contact_email',
    ];

    // Relationship with the Resource model (Many Donors can donate many Resources)
    public function resources()
    {
        return $this->belongsToMany(Resource::class, 'donor_resource');
    }
}
