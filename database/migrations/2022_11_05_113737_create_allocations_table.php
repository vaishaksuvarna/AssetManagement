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
        Schema::create('allocations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('department')->unsigned();
            $table->foreign('department')->references('id')->on('departments')->onDelete('cascade');
            $table->bigInteger('section')->unsigned();
            $table->foreign('section')->references('id')->on('sections')->onDelete('cascade');
            $table->bigInteger('assetType')->unsigned();
            $table->foreign('assetType')->references('id')->on('assettypes')->onDelete('cascade');
            $table->bigInteger('assetName')->unsigned();
            $table->foreign('assetName')->references('id')->on('assets')->onDelete('cascade');
            $table->string('userType');
            $table->bigInteger('empId')->unsigned()->nullable();
            $table->foreign('empId')->references('id')->on('users')->onDelete('cascade');
            $table->string('empName')->nullable();
            $table->bigInteger('userDepartment')->unsigned()->nullable();
            $table->foreign('userDepartment')->references('id')->on('departments')->onDelete('cascade');
            $table->bigInteger('user')->unsigned()->nullable();
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
            $table->string('position');
            $table->string('fromDate')->nullable();
            $table->string('tomDate')->nullable();
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
        Schema::dropIfExists('allocations');
    }
};