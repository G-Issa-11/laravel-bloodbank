<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->id();      
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender', ['male', 'female', 'other']); 
            $table->string('email')->unique();
            $table->text('address'); // Using text for address as it might be longer
            $table->unsignedBigInteger('bloodgroup_id'); 
            $table->foreign('bloodgroup_id')->references('id')->on('bloodgroups');
            $table->date('last_donation_date'); 
            $table->timestamps();

            // Foreign key constraint for bloodgroup_id
            // $table->foreign('bloodgroup_id')->references('id')->on('blood_groups');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donors');

    }


}
