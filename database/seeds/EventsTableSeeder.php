<?php
require_once 'SampleData.php';


class EventsTableSeeder extends SampleData
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->EventsCaption as $value)
        {
            DB::table('events')->insert([
                'caption'=>$value
            ]);
        }
    }
}
