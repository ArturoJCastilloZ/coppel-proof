<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('products', function (Blueprint $table) {
            $table->integer('sku', 6)->unique();
            $table->string('articulo', 15);
            $table->string('marca', 15);
            $table->string('modelo', 20);
            $table->integer('departamento');
            $table->integer('clase');
            $table->integer('familia');
            $table->integer('stock');
            $table->integer('cantidad');
            $table->integer('descontinuado')->nullable();
            $table->date('baja')->nullable();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE products CHANGE departamento departamento int(1) NOT NULL');
        DB::statement('ALTER TABLE products CHANGE clase clase int(2) UNSIGNED ZEROFILL NOT NULL');
        DB::statement('ALTER TABLE products CHANGE familia familia int(3) UNSIGNED ZEROFILL NOT NULL');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
