<?php

use App\Models\Bread;
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
        Schema::create('sandwitches', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150)->default("KANAPKA");
            $table->foreignIdFor(Bread::class, 'bread_id')
                ->constrained('breads')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unsignedDouble('price', 19, 2)->default(0.00);
            // $table->foreignIdFor(Bread::class, 'bread_id')
            //     ->nullable()
            //     ->constrained('breads')
            //     ->onUpdate('cascade')
            //     ->nullOnDelete();

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
        Schema::dropIfExists('sandwitches');
    }
};
