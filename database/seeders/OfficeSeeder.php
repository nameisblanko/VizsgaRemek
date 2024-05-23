<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Office;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // this file is used to declare the sql db records for the offices,
        //  until we are able to use ERP1's db
        Office::create([
            "office_name"=> "farewell_andrássy",
            "zip_code" => "1062 ",
            "city" => "Budapest",
            "street" => "Andrássy út",
            "house_number" => "67",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "farewell_ferenciek_tere",
            "zip_code" => "1053 ",
            "city" => "Budapest",
            "street" => "Ferenciek tere",
            "house_number" => "57",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "farewell_budaiak",
            "zip_code" => "1036",
            "city" => "Budapest",
            "street" => "Óbudai utca",
            "house_number" => "2",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "farewell_olympos",
            "zip_code" => "1073",
            "city" => "Budapest",
            "street" => "Erzsébet körút",
            "house_number" => "98",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "farewell_dohány_utca",
            "zip_code" => "1074",
            "city" => "Budapest",
            "street" => "Dohány u.",
            "house_number" => "12",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "farewell_sugár",
            "zip_code" => "1055",
            "city" => "Budapest",
            "street" => "Kossuth Lajos u.",
            "house_number" => "77",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "farewell_villáby",
            "zip_code" => "7773",
            "city" => "Villány",
            "street" => "Arany János u.",
            "house_number" => "12",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "farewell_kossuth",
            "zip_code" => "1055",
            "city" => "Budapest",
            "street" => "Kossuth Lajos u.",
            "house_number" => "65",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "farewell_csorba",
            "zip_code" => "1119",
            "city" => "Budapest",
            "street" => "Csorba u.",
            "house_number" => "10",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "farewell_rkk",
            "zip_code" => "1138",
            "city" => "Budapest",
            "street" => "Róbert Károly körüt",
            "house_number" => "33",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "farewell_kinizsi",
            "zip_code" => "1092",
            "city" => "Budapest",
            "street" => "Kinizsi u.",
            "house_number" => "21",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "aevum_endrei",
            "zip_code" => "2000",
            "city" => "Szentendre",
            "street" => "Vastagh György u.",
            "house_number" => "7",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "farewell_debrecen_károli",
            "zip_code" => "4032",
            "city" => "Debrecen",
            "street" => "Károli Gáspár u.",
            "house_number" => "172",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "farewell_szombathelyi",
            "zip_code" => "9700",
            "city" => "Szombathely",
            "street" => "Kossuth Lajos u.",
            "house_number" => "25",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "farewell_budakeszi",
            "zip_code" => "2092",
            "city" => "Nyíregyháza",
            "street" => "Petőfi Sándor u.",
            "house_number" => "11",
            "number_of_workers" => "2"
        ]);
        Office::create([
            "office_name"=> "farewell_degasi",
            "zip_code" => "6000",
            "city" => "Kecskemét",
            "street" => "Szent István tér",
            "house_number" => "8",
            "number_of_workers" => "2"
        ]);
    }
}
