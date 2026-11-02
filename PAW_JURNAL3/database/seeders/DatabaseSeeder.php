<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Pengguna LMS (Dosen) - TODO 1
        $dosen = User::updateOrCreate(
            ['email' => 'Gituyy@dosen.telkomuniversity.ac.id'], 
            [
                'name' => 'Reghita Indira Putri',
                'password' => bcrypt('GITONGGG'),
                'role' => 'dosen',
                'nomor_induk' => '1122334455'
            ]
        );

        // 2. Akun Pengguna LMS (Mahasiswa)
        $mahasiswa = User::updateOrCreate(
            ['email' => 'kadafi@student.telkomuniversity.ac.id'],
            [
                'name' => 'Muhammad Kadafi',
                'password' => bcrypt('Dippooo'),
                'role' => 'mahasiswa',
                'nomor_induk' => '1202220022' // Isi sesuai ketentuan, jika ada
            ]
        );

        // 3. Data Awal Mata Kuliah
        $mk = \App\Models\MataKuliah::updateOrCreate(
            ['kode_mk' => 'CII3B4'],
            [
                'nama_mk' => 'Pengembangan Aplikasi Website',
                'sks' => 4,
                'kelas' => 'SI-46-01',
                'deskripsi' => 'Mata kuliah pengembangan aplikasi web menggunakan framework Laravel.',
                'dosen_id' => $dosen->id,
            ]
        );
    }
}