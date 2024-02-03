<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\FruitCategory;

class CreateFruitCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fruit_categories', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('name', 25);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        $apple = new FruitCategory(['name' => 'Apple']);
        $apple->save();

        $banana = new FruitCategory(['name' => 'Banana']);
        $banana->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fruit_categories');
    }
}
