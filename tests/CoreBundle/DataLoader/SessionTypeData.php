<?php

namespace Tests\CoreBundle\DataLoader;

class SessionTypeData extends AbstractDataLoader
{
    protected function getData()
    {
        $arr = array();

        $arr[] = array(
            'id' => 1,
            'title' => $this->faker->text(50),
            'assessmentOption' => '1',
            'school' => '1',
            'aamcMethods' => ['AM001'],
        );

        $arr[] = array(
            'id' => 2,
            'title' => 'second session type',
            'assessmentOption' => '2',
            'school' => '1',
            'aamcMethods' => ['AM001'],
        );


        return $arr;
    }

    public function create()
    {
        return array(
            'id' => 3,
            'title' => $this->faker->text(50),
            'school' => '1',
            'aamcMethods' => []
        );
    }

    public function createInvalid()
    {
        return [];
    }
}
