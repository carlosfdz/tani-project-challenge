<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates =['deleted_at'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'employees';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'paternal_surname',
        'email',
        'phone',
        'company_id'
    ];

    /**
     * Get the employees for the companies.
     */
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
