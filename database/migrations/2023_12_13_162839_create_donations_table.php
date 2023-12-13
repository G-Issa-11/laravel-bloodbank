<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('donor_id');
            $table->foreign('donor_id')->references('personal_id')->on('donors');
            $table->string('staff_id');
            $table->foreign('staff_id')->references('staff_id')->on('staffs');
            $table->string('bloodgroup_id');
            $table->foreign('bloodgroup_id')->references('id')->on('bloodgroups');
            $table->date('donation_date');
            $table->integer('units_donated');
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
        Schema::dropIfExists('donations');
    }
}
