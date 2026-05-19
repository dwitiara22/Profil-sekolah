<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
        {
            Schema::create('tim_kerjas', function (Blueprint $table) {
                $table->id();

                // Relasi ke admin yang input
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

                $table->string('nama_lengkap');
                $table->string('nip', 30)->nullable();
                $table->string('jabatan_di_tim');

                // Tambahkan index() untuk mempercepat pencarian WHERE kategori = 'humas'
                $table->enum('kategori', [
                    'kepegawaian', 'humas', 'keuangan', 'rtp',
                    'perpustakaan', 'pengajaran', 'kesiswaan',
                    'bengkel', 'hatchery', 'pengolahan', 'tambak'
                ])->index();

                $table->string('foto')->nullable();
                $table->timestamps();
            });

        Schema::create('tim_kerjas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor_induk')->unique(); // Bisa diisi NIP (Guru) atau NISN (Siswa)
            $table->string('peran'); //  KUNCI: Isinya 'Guru' atau 'Siswa'
            $table->string('kelas_atau_mapel')->nullable(); // Kelas untuk siswa, Mapel untuk guru
            $table->string('proka'); // NKPI, TKPI, APAPL, APHP
            $table->string('status')->default('Aktif'); // Aktif, Drop Out, Lulus (Untuk Siswa)
            $table->timestamps();
        });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tim_kerjas');
        Schema::dropIfExists('siswas');
        Schema::dropIfExists('gurus');
    }
};
