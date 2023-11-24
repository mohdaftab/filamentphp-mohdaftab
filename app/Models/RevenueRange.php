<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevenueRange extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "title"
    ];

    public function buyers()
    {
        return $this->belongsToMany(Buyer::class);
    }
}
