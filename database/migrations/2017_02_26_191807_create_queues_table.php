<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queues', function (Blueprint $table) {

            $table->increments('id');

            $table->enum('type', [
                'Citizen',
                'Organisation',
                'Anonymous',
            ]);

            /**
             * The following fields are nullable
             * because the person who is in the Queue,
             * may be Anonymous
             */

            $table->enum('title', [
                'Mr',
                'Mrs',
                'Mss',
                'Dr',
            ])->nullable();

            $table->text('name')->nullable();
            $table->text('surname')->nullable();
            $table->text('organisation')->nullable();

            $table->enum('service', [
                'Housing',
                'Benefits',
                'Council Tax',
                'Fly-tipping',
                'Missed Bin',
            ]);

            $table->dateTime('queued_at');
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
        Schema::dropIfExists('queues');
    }
}
