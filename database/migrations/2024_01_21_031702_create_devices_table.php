<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->string('type');
            $table->string('brand');
            $table->string('model');
            $table->text('damage')->nullable();
            $table->text('repairs')->nullable();
            $table->decimal('repair_cost', 8, 2)->nullable();
            $table->date('pickup_date')->nullable();
            $table->date('received_date')->nullable();
            $table->boolean('is_picked_up')->default(false);
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices');
    }
}
