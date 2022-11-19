<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('zipcode');
            $table->string('city');
            $table->string('street');
            $table->string('house');
            $table->string('flat')->nullable();
            $table->string('phone');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('zipcode');
            $table->dropColumn('city');
            $table->dropColumn('street');
            $table->dropColumn('house');
            $table->dropColumn('flat');
            $table->dropColumn('phone');
            $table->dropColumn('email');
        });
    }
};
