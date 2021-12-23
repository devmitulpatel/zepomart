<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ownables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dynamic_site_data_id');
            $table->unsignedBigInteger('ownables_id');
            $table->string('ownables_type');
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
        Schema::dropIfExists('ownables');
    }
}
