<?php

use App\Models\Buyer;
use App\Models\Industry;
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
        Schema::create('buyer_industry', function (Blueprint $table) {
            $table->foreignIdFor(Buyer::class);
            $table->foreignIdFor(Industry::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyer_industry');
    }
};
