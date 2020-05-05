<?php
use Illuminate\Database\Seeder;


class SampleData extends Seeder
{
    protected $EventsCaption = array('BeLive',
                            'Leopolis Jazz Fest',
                            'Atlas Weekend',
                            'Faine Misto',
                            'UPark',
                            'Koktebel Jazz Festival',
                            'ZaxidFest');

    protected $BidsPersons = [
        ["name"=>"Alex", "mail"=>"Alex@mail.ua"],
        ["name"=>"Andrei","mail"=>"Andrei@mail.ua"],
        ["name"=>"Irina","mail"=>"Irina@mail.ua"],
        ["name"=>"Sergey","mail"=>"Sergey@mail.ua"],
        ["name"=>"Tatiana","mail"=>"Tatiana@mail.ua"],
        ["name"=>"Anastasia","mail"=>"Anastasia@mail.ua"],
        ["name"=>"Aleksandr","mail"=>"Aleksandr@mail.ua"],
        ["name"=>"Ksenia","mail"=>"Ksenia@mail.ua"],
        ["name"=>"Julia","mail"=>"Julia@mail.ua"],
        ["name"=>"Yana","mail"=>"Yana@mail.ua"],
        ["name"=>"Oleg","mail"=>"Oleg@mail.ua"],
        ["name"=>"Marina","mail"=>"Marina@mail.ua"],
        ["name"=>"Volodimir","mail"=>"Volodimir@mail.ua"],
        ["name"=>"Maria","mail"=>"Maria@mail.ua"]
    ];

    protected function getEventID()
    {
    $EventsCount = count($this->EventsCaption);

    return rand(1,$EventsCount);

    }

    protected function getPrice()
    {
        return(rand(100,1000));
    }

}
