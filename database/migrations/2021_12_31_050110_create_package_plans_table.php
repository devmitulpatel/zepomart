<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->string('icon')->nullable();
//            $table->bigInteger('monthly_cost')->default(0);
//            $table->bigInteger('yearly_cost')->default(0);
            $table->bigInteger('discount')->default(0);
            $table->boolean('status')->default(1);
            $table->boolean('featured')->default(0);
            $table->unsignedBigInteger('sort')->default(0);
            $table->unsignedBigInteger('plan_type');
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
        Schema::dropIfExists('package_plans');
    }
}
