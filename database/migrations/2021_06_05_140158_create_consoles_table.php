<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewa_status', function (Blueprint $table) {
            $table->id();
            $table->String('status', 20);
            $table->timestamps();
        });

        Schema::create('consoles', function (Blueprint $table) {
            $table->id();
            $table->String('merek', 50);
            $table->String('type' . 20);
            $table->foreignId('isSewa')->references('id')
                ->on('sewa_status')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->text('descripsion')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sewa_status');
        Schema::dropIfExists('consoles');
    }
}
