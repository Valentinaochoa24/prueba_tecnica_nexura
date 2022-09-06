<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\area;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255)->comment('nombre completo del empleado');
            $table->string('email', 255)->comment('correo electronico del empleado');
            $table->char('sexo')->comment('M: masculino, F: femenini');
            $table->foreignIdFor(area::class)->comment('area de la empresa que perenece el empleado');
            $table->integer('boletin')->comment('1: recibir boletin, 0: no recibir boletin');
            $table->text('descripcion')->comment('se describe la experiencia del empleado');
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
        Schema::dropIfExists('empleados');
    }
}
