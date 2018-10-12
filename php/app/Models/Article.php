<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Article
 * @package App\Models
 * @version October 12, 2018, 1:17 pm UTC
 *
 * @property string name,
 * @property string text,
 */
class Article extends Model
{
    public $table = 'articles';

    public $fillable = [
        'name',
        'body'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'body' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|min:5',
        'body' => 'required|min:10'
    ];
}
