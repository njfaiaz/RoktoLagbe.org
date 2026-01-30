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
"faiaz","sifat","junayed","tanvir","ayesha","rafiq","sumaiya","nayeem","shahriar","mahdi",
"labiba","arif","mim","tuhin","fahim","nabila","rakib","shuvo","jannat","anik",
"meher","sohana","ibrahim","rumana","sajib","tanha","shirin","foysal","labonno","tania",
"raihaan","samiha","farhan","nafisa","hasan","amina","shahad","rayhan","fariha","riyad",
"mahi","nishat","imran","sharmin","tanima","junaid","mahfuz","arman","meherun","nashit",
"rokeya","tawsif","sourav","anika","shimul","farhana","arafat","rasheda","mimra","samir",
"tuhinur","rakiba","mahin","farhia","sifatul","labon","sharmila","mahina","junia","ayash",
"rafia","sumaya","nuzhat","shahim","arifa","mimah","tufan","fahima","nabira","rakiba2",
"shuvra","jannata","aniket","mehera","sohana2","ibrahima","rumana2","sajid","tanha2","shirin2",
"foysala","labonno2","tania2","raihaan2","samiha2","farhana2","nafisa2","hasana","amina2","shahada","rayhana"
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
