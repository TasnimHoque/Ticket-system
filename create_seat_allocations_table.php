// database/migrations/xxxx_xx_xx_create_seat_allocations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatAllocationsTable extends Migration
{
    public function up()
    {
        Schema::create('seat_allocations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('trip_id')->constrained();
            $table->integer('seat_number');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seat_allocations');
    }
}
