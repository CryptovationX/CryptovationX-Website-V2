<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCXAHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_x_a_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('knowyc_id');
            $table->string('type')->nullable();
            $table->decimal('amount_usd', 10, 2)->nullable();
            $table->decimal('token', 16, 8)->nullable();
            $table->decimal('total_token', 16, 8)->nullable();
            $table->float('bonus')->nullable();
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
        Schema::dropIfExists('c_x_a_histories');
    }
}
