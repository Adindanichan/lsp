<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAsesor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesors', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('uuid_generate_v4()'))->index();
            $table->uuid('user_id')->index();
            $table->string('nik')->unique()->index();
            $table->string('name')->index();
            $table->date('birth_date');
            $table->string('phone');
            $table->string('profile')->nullable();
            $table->enum('gender', ['p', 'l']);
            $table->string('address');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('asesors');
    }
}
