<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('Request_url');
            $table->string('Request_method');
            //$table->text('Request_headers')->nullable();
            $table->longText('Request_body')->nullable();
            //$table->unsignedSmallInteger('Response_status_code');
            //$table->text('Response_headers')->nullable();
            //$table->longText('Response_body')->nullable();
            $table->timestamps();
        });
         DB::statement('ALTER TABLE api_logs AUTO_INCREMENT = 1');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api_logs');
    }
}
