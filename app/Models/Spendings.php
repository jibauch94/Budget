<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spendings extends Model
{
    use HasFactory;

            /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'description',
        'amount',
        'valid_from',
        'valid_to',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
