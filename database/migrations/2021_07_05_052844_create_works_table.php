<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->longText('work_desc');
            $table->string('asignee',100);
            $table->string('asigned_to',100);
            $table->double('progress', 15, 2)->nullable()->default(0.00);
            $table->enum('priority', ['high', 'low','medium'])->nullable()->default(['medium']);
            $table->string('document',50)->nullable();
            $table->boolean('is_active')->nullable()->default(false);
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
        Schema::dropIfExists('works');
    }
}
