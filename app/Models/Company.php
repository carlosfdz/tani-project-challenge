<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use Illuminate\Support\Facades\URL;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates =['deleted_at'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'companies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'logo',
        'website'
    ];

    /**
     * Get the employees for the companies.
     */
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    /**
     * Get logo by URL.
     */
    public function getLogoAttribute($logo)
    {
        return URL('assets/images/uploads/companies/'.$logo);
    }
}
