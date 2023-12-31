<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // buatkan seeder pada tabel pengelola untuk admin, waiter, dan chef

        \App\Models\User::factory()->create([
            'email' => 'admin@gmail.com',
            'name' => 'admin',
            'password' => bcrypt('admin'),
            'profile' => '/images/user/admin.jpg',
            'role' => 'admin',
        ]);

        \App\Models\User::factory()->create([
            'email' => 'waiter@gmail.com',
            'name' => 'waiter satu',
            'password' => bcrypt('waiter'),
            'profile' => '/images/waiter/waiter satu.jpg',
            'role' => 'waiter',
        ]);

        \App\Models\User::factory()->create([
            'email' => 'chef@gmail.com',
            'name' => 'chef satu',
            'profile' => '/images/chef/chef satu.jpg',
            'password' => bcrypt('chef'),
            'role' => "chef",
        ]);

        // buatkan factory 10 kali untuk tables
        \App\Models\Tables::factory(10)->create();

        \App\Models\Menu::factory()->create([
            'name' => 'Batagor',
            'slug' => 'batagor',
            'type' => 'food',
            'description' => 'Batagor merupakan jajanan khas Bandung yang terbuat dari tepung aci, ikan tenggiri, dan bumbu-bumbu.',
            'image' => '/images/menu/makanan/batagor.jpg',
            'price' => 10000,
            'stock' => 100,
            'status' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\Menu::factory()->create([
            'name' => 'Karedok Leunca',
            'slug' => 'karedok-leunca',
            'type' => 'food',
            'description' => 'Karedok leunca merupakan salad khas Sunda yang terbuat dari sayuran seperti kacang panjang, leunca, terong, dan bumbu-bumbu.',
            'image' => '/images/menu/makanan/karedok-leunca.jpg',
            'price' => 15000,
            'stock' => 50,
            'status' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\Menu::factory()->create([
            'name' => 'Mie Kocok',
            'slug' => 'mie-kocok',
            'type' => 'food',
            'description' => 'Mie kocok merupakan hidangan mi berkuah yang terbuat dari mie kuning, daging sapi, tauge, dan bumbu-bumbu.',
            'image' => '/images/menu/makanan/mie-kocok.jpg',
            'price' => 20000,
            'stock' => 75,
            'status' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\Menu::factory()->create([
            'name' => 'Nasi Tutug Oncom',
            'slug' => 'nasi-tutug-oncom',
            'type' => 'food',
            'description' => 'Nasi tutug oncom merupakan hidangan nasi yang dimasak bersama oncom dan bumbu-bumbu.',
            'image' => '/images/menu/makanan/nasi-tutug-oncom.jpg',
            'price' => 25000,
            'stock' => 25,
            'status' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\Menu::factory()->create([
            'name' => 'Sate Maranggi',
            'slug' => 'sate-maranggi',
            'type' => 'food',
            'description' => 'Sate maranggi merupakan sate khas Purwakarta yang terbuat dari daging sapi yang dibakar dengan bumbu khusus.',
            'image' => '/images/menu/makanan/sate-maranggi.jpg',
            'price' => 30000,
            'stock' => 10,
            'status' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        \App\Models\Menu::factory()->create([
                'name' => 'Es Teh Sunda',
                'slug' => 'es-teh-sunda',
                'type' => 'drink',
                'description' => 'Minuman teh Sunda dengan gula aren.',
                'image' => '/images/menu/minuman/esteh.jpg',
                'price' => 10000, // Harga dalam rupiah
                'stock' => 100,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        \App\Models\Menu::factory()->create([
                'name' => 'Bandrek',
                'slug' => 'bandrek',
                'type' => 'drink',
                'description' => 'Minuman tradisional Sunda yang hangat dengan jahe dan gula aren.',
                'image' => '/images/menu/minuman/bandrek.jpg',
                'price' => 12000,
                'stock' => 80,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        \App\Models\Menu::factory()->create([
                'name' => 'Es Degan',
                'slug' => 'es-degan',
                'type' => 'drink',
                'description' => 'Minuman segar dengan air kelapa hijau dan daging kelapa muda.',
                'image' => '/images/menu/minuman/esdegan.jpg',
                'price' => 15000,
                'stock' => 90,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        \App\Models\Menu::factory()->create([
                'name' => 'Es Cincau',
                'slug' => 'es-cincau',
                'type' => 'drink',
                'description' => 'Minuman manis dengan agar-agar hitam, santan, dan gula merah.',
                'image' => '/images/menu/minuman/escincau.jpg',
                'price' => 13000,
                'stock' => 75,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        \App\Models\Menu::factory()->create([
                'name' => 'Cendol',
                'slug' => 'cendol',
                'type' => 'drink',
                'description' => 'Minuman segar dengan agar-agar hijau, santan, gula merah, dan es serut.',
                'image' => '/images/menu/minuman/cendol.jpg',
                'price' => 14000,
                'stock' => 85,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
        ]);
    }
}
