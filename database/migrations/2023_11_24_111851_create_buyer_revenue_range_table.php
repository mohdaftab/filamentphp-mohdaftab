<?php

use App\Models\Buyer;
use App\Models\RevenueRange;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buyer_revenue_range', function (Blueprint $table) {
            $table->foreignIdFor(Buyer::class);
            $table->foreignIdFor(RevenueRange::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyer_revenue_range');
    }
};
