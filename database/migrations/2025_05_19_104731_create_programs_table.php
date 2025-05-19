<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('hari'); // contoh: Senin, Selasa, dll
            $table->time('jam_mulai');
            $table->time('jam_selesai')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};

?>
