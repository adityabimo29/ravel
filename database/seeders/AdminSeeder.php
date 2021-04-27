<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\Models\User;
        $administrator->username = "lopotia";
        $administrator->name = "Site Administrator";
        $administrator->email = "administrator@lopotia.com";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = \Hash::make("lopotia");
        $administrator->avatar = "saat-ini-tidak-ada-file.png";
        $administrator->address = "Sarmili, Bintaro, Tangerang Selatan";
        $administrator->save();
        $this->command->info("User Admin berhasil diinsert");
    }
}