<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Mahasiswa::truncate();

      // Process the second CSV file (format: nim;nama;akt;kelas)
      $csvFile = fopen(base_path("database/data/MahasiswaSI2023.csv"), "r");
      $firstline = true;

      while (($data = fgetcsv($csvFile, 1000, ";")) !== false) {
          if (!$firstline) {

            // Filter Untuk 2023
            if ($data[2] == 2023) {
              Mahasiswa::create([
                  'nim' => str_pad($data[0], 14, "0", STR_PAD_LEFT),
                  'nama' => $data[1] ?? 'None',
                  'akt' => 2023,
                  'kelas' => $data[3] ?? 'None',
              ]);
            }
          }
          $firstline = false;
      }
      fclose($csvFile);
      


      // fopen untuk membuka data file, "r" artinya read only
      $csvFile = fopen(base_path("database/data/MahasiswaSI2024.csv"), "r");
      $firstline = true;

      // perulangan mengecek data csv 1/1 tiap barisnya (ada/tidak)
      while (($data = fgetcsv($csvFile, 1000, ",")) !== false) {
        if (!$firstline) {
          Mahasiswa::create([
            // "nim" => $data['2'] ?? "None",
            "nim" => str_pad($data['2'] ?? "None", 14, "0", STR_PAD_LEFT),
            "nama" => $data['1']?? "None",
            "akt" => 2024,
            "kelas" => "None",
          ]);
        }
        $firstline = false;
      }

      // fclose untuk menutup file yang sudah dibuka sebelumnya
      fclose($csvFile);
    }
}
