<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $fillable = ['fund_id', 'user_id', 'amount'];

    public function fund()
    {
        return $this->belongsTo(Fund::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
