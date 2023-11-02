<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('number', 50);
            $table->boolean('gender')->nullable()->default(null);;
            $table->string('dob', 50)->nullable();
            $table->string('city', 50);
            $table->string('country', 50);
            $table->text('message')->nullable();
            $table->string('age_group', 50)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE contact_us CHANGE COLUMN gender gender BOOLEAN DEFAULT NULL COMMENT 'Male=1, Female = 2'");

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
