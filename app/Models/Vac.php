<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vac
 *
 * @property $a
 * @property $b
 * @property $c
 * @property $d
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vac extends Model
{
    
    static $rules = [
		'a' => 'required',
		'b' => 'required',
		'c' => 'required',
		'd' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['a','b','c','d'];



}
