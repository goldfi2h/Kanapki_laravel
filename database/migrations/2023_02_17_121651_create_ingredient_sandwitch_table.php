<?php

use App\Models\Ingredient;
use App\Models\Sandwitch;
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
        Schema::create('ingredient_sandwitch', function (Blueprint $table) {
            $table->foreignIdFor(Ingredient::class, 'ingredient_id')
                ->constrained('ingredients')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignIdFor(Sandwitch::class, 'sandwitch_id')
                ->constrained('sandwitches')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->boolean('extra_spicy')->default(false);
            
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
        Schema::dropIfExists('ingredient_sandwitch');
    }
};
