<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Tasks')->insert(array(
            array(
                'name' => 'Получение письма',
                'counter' => 0
            ),
            array(
                'name' => 'Отправка письма',
                'counter' => 0
            ),
            array(
                'name' => 'Получение посылки',
                'counter' => 0
            ),
            array(
                'name' => 'Отправка посылки',
                'counter' => 0
            ),
        ));
    }
}
