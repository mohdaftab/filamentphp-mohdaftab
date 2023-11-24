<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    protected $fillable = [
        "name"
    ];

    public function regions()
    {
        return $this->belongsToMany(Region::class)->orderBy("title");
    }

    public function industries()
    {
        return $this->belongsToMany(Industry::class)->orderBy("title");
    }

    public function revenue_ranges()
    {
        return $this->belongsToMany(RevenueRange::class)->orderBy("id");
    }
}
