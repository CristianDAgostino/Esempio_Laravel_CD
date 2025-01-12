<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
    * Run the migrations.
    */
    public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {
            //creare colonna user_id con valore intero senza segno
            $table->unsignedBigInteger('user_id')->nullable()->after('price');
            // aggiungere nullable e poi dove metterla nel database
            $table->foreign('user_id')->referneces('id')->on('user');
            
        });
        //user id è una chiave esterna che si riferisce alla tabella dello user
    }
    
    /**
    * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            //l'array è una convenzione di laravel
            // eliminare la colonna
            $table->dropColumn('user_id');
        });
    }
};
