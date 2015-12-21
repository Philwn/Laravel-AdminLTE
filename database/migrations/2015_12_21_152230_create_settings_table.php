<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('company');
            $table->string('name');
            $table->string('email');
            $table->string('telephone');
            $table->string('street');
            $table->string('address2');
            $table->string('town');
            $table->string('county');
            $table->string('postcode');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('pinterest');
            $table->string('youtube');
            $table->timestamps();
        });

        DB::table('settings')->insert(
        array(
            'company' => 'website name',
            'name'  => 'Persons name',
            'email' => 'name@domain.com',
            'telephone' => '02536 376293',
            'street' => '24 Sparrows Nest',
            'address2' => 'Langholm',
            'town' => 'Warwick',
            'county' => 'Warwickshire',
            'postcode' => 'WA4 3BG'
        )
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('settings');
    }
}
