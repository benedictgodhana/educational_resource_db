<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    // The table associated with the model (optional if it's following Laravel's conventions)
    protected $table = 'distributions';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'resource_id',
        'beneficiary_id',
        'quantity',
        'date_distributed',
    ];

    // Relationship with the Resource model (Each Distribution belongs to one Resource)
    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }

    // Relationship with the Beneficiary model (Each Distribution belongs to one Beneficiary)
    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
