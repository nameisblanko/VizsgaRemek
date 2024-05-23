<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call([RoleSeeder::class]);
        // $this->call([OfficeSeeder::class]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@temetkezes.hu',
        // ]);

        // \App\Models\User::factory(10)->create();
    
        $this->call(
            [
                RoleSeeder::class,
                OfficeSeeder::class,
                PrinterTypeSeeder::class,
                BrandSeeder::class,
                CheckTypeSeeder::class,
                UrnInsertSeeder::class,
                UrnInsertTypeSeeder::class,
            ]
        );
        User::factory()->create([
            'name' => 'dev',
            'email' => 'dev@temetkezes.hu',
            'password' => Hash::make('biscuit23242'),
            'role_id' => 1,
            'office_id'=> 1
        ]);
        User::factory()->create([
            'name' => 'Dávid',
            'email' => 'david@temetkezes.hu',
            'password' => Hash::make('biscuit23242'),
            'role_id' => 1,
            'office_id'=> 1
        ]);
        User::factory()->create([
            'name' => 'Ernő',
            'email' => 'erno@temetkezes.hu',
            'password' => Hash::make('biscuit23242'),
            'role_id' => 1,
            'office_id'=> 1
        ]);
        // Office 1
        User::factory()->create([
            'name' => 'temet.andrássy',
            'email' => 'andrassy@temetkezes.hu',
            'password' => Hash::make('biscuit23242'),
            'role_id' => 4,
            'office_id' => 1
        ]);
        User::factory()->create([
            'name' => 'temet.ferenciek_tere',
            'email' => 'ferenci@temetkezes.hu',
            'password' => Hash::make('biscuit23242'),
            'role_id' => 4,
            'office_id' => 2
        ]);
        
        // Office 2
        User::factory()->create([
            'name' => 'temet.budaiak',
            'email' => 'budaiak@temetkezes.hu',
            'password' => Hash::make('biscuit23242'),
            'role_id' => 4,
            'office_id' => 3
        ]);
        
        // Office 3
        User::factory()->create([
            'name' => 'temet.olympos',
            'email' => 'olympos@temetkezes.hu',
            'password' => Hash::make('biscuit23242'),
            'role_id' => 4,
            'office_id' => 4
        ]);
        
        // Office 4
        User::factory()->create([ 
            'name' => 'temet.dohány_utca',
            'email' => 'dohanyutca@temetkezes.hu',
            'password' => Hash::make('biscuit23242'),
            'role_id' => 4,
            'office_id' => 5
        ]);
        
        // Office 5
        User::factory()->create([
            'name' => 'temet.sugár',
            'email' => 'sugar@temetkezes.hu',
            'password' => Hash::make('biscuit23242'),
            'role_id' => 4,
            'office_id' => 6
        ]);
        
        // Office 6
        User::factory()->create([
            'name' => 'temet.villány',
            'email' => 'villany@temetkezes.hu',
            'password' => Hash::make('biscuit23242'),
            'role_id' => 4,
            'office_id' => 7
        ]);
        
        // Office 7
        User::factory()->create([
            'name' => 'temet.kossuth',
            'email' => 'kossuth@temetkezes.hu',
            'password' => Hash::make('biscuit23242'),
            'role_id' => 4,
            'office_id' => 8
        ]);
        
        // Office 8
        User::factory()->create([
            'name' => 'temet.csorba',
            'email' => 'csorba@temetkezes.hu',
            'password' => Hash::make('biscuit23242'),
            'role_id' => 4,
            'office_id' => 9
        ]);
        
        // Office 9
        User::factory()->create([
            'name' => 'temet.rkk',
            'email' => 'robertkarolykorut@temetkezes.hu',
            'password' => Hash::make('biscuit23242'),
            'role_id' => 4,
            'office_id' => 10
        ]);
        // Office 11
        User::factory()->create([
            'name' => 'temet.kinizsi',
            'email' => 'kinizsi@temetkezes.hu',
            'password' => Hash::make('biscuit23242'),
            'role_id' => 4,
            'office_id' => 11
        ]);
        
        // Office 12
        User::factory()->create([
            'name' => 'temet.endrei',
            'email' => 'endrei@temetkezes.hu',
            'password' => Hash::make('biscuit23242'),
            'role_id' => 4,
            'office_id' => 12
        ]);
        
        // Office 13
        User::factory()->create([
            'name' => 'temet.debrecen_károli',
            'email' => 'karoli@temetkezes.hu',
            'password' => Hash::make('biscuit23242'),
            'role_id' => 4,
            'office_id' => 13
        ]);
        
        // Office 14
        User::factory()->create([
            'name' => 'temet.szombathelyi',
            'email' => 'szombathely@temetkezes.hu',
            'password' => Hash::make('biscuit23242'),
            'role_id' => 4,
            'office_id' => 14
        ]);
        
        // Office 15
        User::factory()->create([
            'name' => 'temet.budakeszi',
            'email' => 'budakeszi@temetkezes.hu',
            'password' => Hash::make('biscuit23242'),
            'role_id' => 4,
            'office_id' => 15
        ]);
        
        // Office 16
        User::factory()->create([
            'name' => 'temet.degasi',
            'email' => 'degasi@temetkezes.hu',
            'password' => Hash::make('biscuit23242'),
            'role_id' => 4,
            'office_id' => 16
        ]);
        
        $this->call([OfficeSupplySeeder::class]);
    }
}
