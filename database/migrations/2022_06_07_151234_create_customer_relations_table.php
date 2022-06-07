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
        Schema::create('customer_relations', function (Blueprint $table) {
            //CreatingTable
            $table->id();
            $table->unsignedBigInteger("customer_id");
            $table->unsignedBigInteger("customer_group_id");
            $table->timestamps();

            //Relations
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('customer_group_id')->references('id')->on('customer_groups');

            //making data unique in pair
            $table->unique(array('customer_id', 'customer_group_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_relations');
    }
};
