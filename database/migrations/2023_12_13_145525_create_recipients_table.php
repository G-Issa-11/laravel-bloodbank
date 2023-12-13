<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipients', function (Blueprint $table) {
            $table->id();
            $table->string('recipient_ID');
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender', ['male', 'female', 'other']); 
            $table->string('email')->unique();
            $table->string('contact_number');
            $table->unsignedBigInteger('bloodgroup_id'); 
            $table->text('address'); // Using text for address as it might be longer
            $table->foreign('bloodgroup_id')->references('id')->on('bloodgroups');
            $table->date('date_of_birth');  
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
        Schema::dropIfExists('recipients');
    }
}
