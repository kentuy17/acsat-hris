<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiometricLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biometric_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->ipAddress('device_ip');
            $table->dateTime('date');
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
        Schema::dropIfExists('biometric_logs');
    }
}
