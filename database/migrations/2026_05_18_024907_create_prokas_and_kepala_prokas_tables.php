<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1. Membuat Tabel Master Proka
        Schema::create('prokas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_proka')->unique(); // NKPI, TKPI, dll
            $table->timestamps();
        });

        // Trik tanpa seeder: Langsung isi data proka dari codingan HTML Anda
        DB::table('prokas')->insert([
            ['nama_proka' => 'NKPI', 'created_at' => now(), 'updated_at' => now()],
            ['nama_proka' => 'TKPI', 'created_at' => now(), 'updated_at' => now()],
            ['nama_proka' => 'APAPL', 'created_at' => now(), 'updated_at' => now()],
            ['nama_proka' => 'APHP', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // 2. Membuat Tabel Kepala Proka (Untuk CRUD)
        Schema::create('kepala_prokas', function (Blueprint $table) {
            $table->id();
            // Menghubungkan ke tabel prokas, jika proka dihapus (cascade) maka data kepala ikut terhapus
            $table->foreignId('proka_id')->constrained('prokas')->onDelete('cascade');
            $table->string('nama_kepala');
            $table->string('nip')->nullable(); // NIP opsional
            $table->string('foto')->nullable(); // Tempat simpan nama file foto jika ada
            $table->date('periode_mulai')->nullable();
            $table->date('periode_selesai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepala_prokas');
        Schema::dropIfExists('prokas');
    }
};
