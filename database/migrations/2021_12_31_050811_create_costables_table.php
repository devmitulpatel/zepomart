<?php

use App\Models\Costable;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costables', function (Blueprint $table) {
            able_model_schema($table,'costable');
            $table->enum('type', Costable::$typeOfValueType)->default(Costable::$defaultTypeOfValueType);
            $table->string('cost');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('costables');
    }
}
