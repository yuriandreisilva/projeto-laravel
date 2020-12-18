<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id('id');
            // unsignedBigInteger = não assinado,
            // para fazermos chave estrangeira
            $table->unsignedBigInteger('user_id');
            $table->string('street');
            $table->string('number');
            $table->string('city');
            $table->text('state');
            // timestamps()
            // Serve para gerar 2 campos no bd sobre qnd
            // foi criado e qnd foi atualizado
            // Gerenciado pelo "eloquent"
            $table->timestamps();
            // é possível desabilitar

            // Chave estrangeira
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
