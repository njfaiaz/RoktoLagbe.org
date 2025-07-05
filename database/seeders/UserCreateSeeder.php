<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserCreateSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Junayed Rahman Faiaz',
            'username' => 'Junayed-Rahman-Faiaz',
            'email' => 'njfaiaz@gmail.com',
            'role' => UserRole::SUPER_ADMIN->value,
            'password' => Hash::make('Faiaz@#1234'),
        ]);

        $users = [
            "user",
            "Redwan Anjum",
            "Dina",
            "Aditi Datta",
            "Mostofa",
            "Tamjid Khan",
            "Jaber",
            "Pritom",
            "Shihan",
            "Sharika",
            "Adnan Maruf",
            "reza taymur",
            "Amena Siddique Mim",
            "md polash",
            "Mohammad Mahbubur Rahman",
            "Sultana Sharmin",
            "Md. Khairun Nobi",
            "mobasshira Hossain",
            "Lamia Rahim",
            "Sayed Ranzu",
            "Tanim",
            "Joy Ahamed",
            "md habib",
            "Tyaba",
            "Mahabubul Islam Tanvir",
            "SIHAB",
            "Zafrin",
            "yusuf",
            "Shawpan",
            "Nafis",
            "Md. Mehedi Hasan",
            "Mojibur Rahman",
            "Elora afrin",
            "Dr Md Hassibul Hakam Ibn Samad",
            "Mst.Momotaj akter",
            "Shakil",
            "Don Mithun Biswas",
            "Nousheen",
            "Md. Mahmudul Hasan",
            "Shaddam Hossain",
            "Tasnim khan",
            "K. M. Nasir Uddin",
            "Bandhan",
            "HAMIDUL HAQUE bHUIYAN",
            "md.yeasin",
            "Hasanuzzaman Begh",
            "Ali Hossain",
            "Shakil Ahamed Raja",
            "Tanvir Hasan",
            "Rupa Zaman",
            "Sukanna Das",
            "Masud",
            "Muhammad Anwarul Islam Babul",
            "Farhana Dilshad",
            "Farhana - Manik",
            "Imran Khan",
            "Mehedy Hasan",
            "Juwel Rana",
            "Md. Ashrafuzzaman",
            "Kawsar Ahmed",

        ];

        foreach ($users as $user) {
            User::create([
                'name' => strtolower($user),
                'username' => User::generateUniqueUsername($user),
                'email' => strtolower($user) . '@gmail.com',
                'role' => UserRole::USER->value,
                'password' => Hash::make('Abc@1234'),
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
