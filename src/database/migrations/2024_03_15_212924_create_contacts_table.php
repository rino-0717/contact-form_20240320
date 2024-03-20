<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned()->notnull();
            $table->string('first_name',225)->notnull();
            $table->string('last_name',225)->varchar(255)->notnull();
            $table->tinyText('gender')->notnull();
            $table->string('email',225)->varchar(255)->notnull();
            $table->integer('tel')->varchar(255)->notnull();
            $table->string('address',225)->varchar(255)->notnull();
            $table->string('building',225)->varchar(255)->nullable();
            $table->text('detail')->notnull();
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
