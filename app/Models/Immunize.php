<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Immunize
 *
 * @property $id
 * @property $name
 * @property $type
 * @property $age
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Immunize extends Model
{
    
    static $rules = [
		'name' => 'required',
		'type' => 'required',
		'age' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','type','age'];



}
