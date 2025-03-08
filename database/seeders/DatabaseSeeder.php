<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $user = [
            [
                'nama' => 'AyoUmrah',
                'nama_pt' => 'PT. Umrahin',
                'pemilik' => 'Gunardi',
                'ijin_biro' => 'HS - 4512678',
                'alamat' => 'surabaya',
                'telepon' => '0210000',
                'email' => 'ayoumrah@mail.com',
                'password' => Hash::make('password'),
                'role' => 'biro'
            ],
            [
                'nama' => 'admin',
                'nama_pt' => '',  // Add default value or correct value
                'pemilik' => '',  // Add default value or correct value
                'ijin_biro' => '',  // Add default value or correct value
                'alamat' => '',  // Add default value or correct value
                'telepon' => '0210000',
                'email' => 'admin@mail.com',
                'password' => Hash::make('password'),
                'role' => 'admin'
            ]
        ];


        $paket = [
    [
        'name' => 'Umrah Asik',
        'media' => 'contoh',
        'user_id' => 1,
        'kode' => 'UA - 001',
        'kota' => 'Surabaya',
        'tanggal_keberangkatan' => '2012-12-24',  // Corrected date format
        'tanggal_kepulangan' => '2012-12-25',  // Corrected date format
        'expired_date' => '2024-12-25',  // Corrected date format
        'status' => 'pending',
        'bandara' => 'Soekarno Hatta',
        'airline' => 'Lion Air',
        'flight' => 'direct',
        'kota_transit' => '',
        'harga' => 1000000,
        'tiket' => 'yes',
        'visa' => 'yes',
        'akomodasi' => 'yes',
        'makan' => 'yes',
        'umroh' => 'yes',
        'airpot_handling' => 'yes',
        'bus' => 'no',
        'zam' => 'no',
        'passport' => 'no',
        'tour' => 'kemana ya'
    ],
    [
        'name' => 'Umrah Transit',
        'media' => 'contoh',
        'user_id' => 1,
        'kode' => 'UA - 001',
        'kota' => 'Surabaya',
        'tanggal_keberangkatan' => '2012-12-24',  // Corrected date format
        'tanggal_kepulangan' => '2012-12-25',  // Corrected date format
        'expired_date' => '2024-12-25',  // Corrected date format
        'status' => 'accept',
        'bandara' => 'Soekarno Hatta',
        'airline' => 'Lion Air',
        'flight' => 'transit',
        'kota_transit' => 'transit dimana ya',
        'harga' => 1000000,
        'tiket' => 'no',
        'visa' => 'no',
        'akomodasi' => 'no',
        'makan' => 'no',
        'umroh' => 'no',
        'airpot_handling' => 'yes',
        'bus' => 'yes',
        'zam' => 'yes',
        'passport' => 'yes',
        'tour' => 'transit kemana ya'
    ]
];


        DB::table('users')->insert($user);
        DB::table('paket')->insert($paket);

    }
}
