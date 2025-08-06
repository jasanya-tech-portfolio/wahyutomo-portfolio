<?php

use App\Traits\BaseModelSoftDelete;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use BaseModelSoftDelete;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('my_journey', function (Blueprint $table) {
            $table->id();
            $table->string('key', 32);
            $table->string('title', 64);
            $table->string('logo', 128);
            $table->string('institude', 128);
            $table->string('desc', 128);
            $table->string('date_range', 128);
            $this->base($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_journey');
    }
};
