<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'topic_id' => '1',
            'message' => 'hello world',

            'topic_id' => '1',
            'message' => 'hello world 1',

            'topic_id' => '1',
            'message' => 'hello world 2',

        ]);
        }
    }

