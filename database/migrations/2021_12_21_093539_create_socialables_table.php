<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socialables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('social_network_id');
            $table->unsignedBigInteger('socialables_id');
            $table->string('socialables_type');
            $table->string('link')->nullable();
            $table->boolean('status')->default(1);
          //  $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socialables');
    }
}
