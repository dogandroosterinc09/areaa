<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'user_id',
        'first_name',
        'last_name',
        'transaction_label',            
        'transaction_invoice',
        'transaction_reference',
        'transaction_amount',
        'notes1',
        'notes2',
        'is_subscription',
        'is_success',
        'start_date',
        'end_date'
    ];

}
