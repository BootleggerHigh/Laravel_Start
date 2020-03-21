<?php

use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 5; $i++) {
            $firsttext = $i % 2 == 0 ? 'Отправка' : 'Получение';
            $lasttext = $i <= 2 ? 'письма' : 'посылки';
            DB::table('tasks')->insert([
                'name' => $firsttext . ' ' . $lasttext,
                'counter' => 0
            ]);
        }


    }
}
