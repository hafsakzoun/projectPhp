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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pr_id');
            $table->string('name');
            $table->meduimText('small_description');
            $table->longText('description');
            $table->string('original_price');
            $table->string('selling_price');
            $table->string('image');
            $table->string('slug');
            $table->string('qty');
            $table->string('tax');
            $table->tinyInteger('status');
            $table->tinyInteger('trending');
            $table->meduimText('meta title');
            $table->meduimText('meta keywords');
            $table->meduimText('meta description');
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
        Schema::dropIfExists('product');
    }
};
