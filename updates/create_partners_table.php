<?php namespace AbeConsultancy\Partners\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePartnersTable extends Migration
{
    public function up()
    {
        Schema::create('abeconsultancy_partners_partners', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('url')->nullable();
            $table->string('image')->nullable();
            $table->integer('weight')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('abeconsultancy_partners_partners');
    }
}
