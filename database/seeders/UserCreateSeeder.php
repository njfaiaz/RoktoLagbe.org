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
            "user", "faiaz", "sifat", "junayed", "tanvir", "ayesha", "rafiq", "sumaiya", "nayeem", "shahriar",
            "mahdi", "labiba", "arif", "mim", "tuhin", "fahim", "nabila", "rakib", "shuvo", "jannat",
            "anik", "meher", "sohana", "ibrahim", "rumana", "sajib", "tanha", "shirin", "foysal", "labonno",
            "tania", "raihaan", "samiha", "farhan", "nafisa", "hasan", "amina", "shahad", "rayhan", "fariha",
            "riyad", "mahi", "nishat", "imran", "sharmin", "tanima", "junaid", "mahfuz", "arman", "meherun",
            "nashit", "rokeya", "tawsif", "sourav", "anika", "shimul", "farhana", "arafat", "rasheda", "mim",
            "sami", "tuhin", "rakib", "mahdi", "fariha", "sifat", "riyad", "labonno", "sharmin", "mahi",
            "jannat", "imran", "tanima", "fahim", "samiha", "arif", "nafisa", "shahad", "rayhan", "anik",
            "meher", "shirin", "junayed", "faiaz", "tanvir", "ayesha", "rafiq", "sumaiya", "nayeem", "shahriar",
            "mahdi", "labiba", "arif", "mim", "tuhin", "fahim", "nabila", "rakib", "shuvo", "jannat"
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
