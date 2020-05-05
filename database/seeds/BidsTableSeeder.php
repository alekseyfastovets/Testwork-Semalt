<?php
require_once 'SampleData.php';

class BidsTableSeeder extends SampleData
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->BidsPersons as $value)
        {
            DB::table('bids')->insert([
                'id_event'=>$this->getEventID(),
                'name'=>$value['name'],
                'email'=>$value['mail'],
                'price'=>$this->getPrice()
            ]);
        }
    }
}
