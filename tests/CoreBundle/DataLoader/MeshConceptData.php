<?php

namespace Tests\CoreBundle\DataLoader;

class MeshConceptData extends AbstractDataLoader
{
    protected function getData()
    {
        $arr = array();
        $arr[] = array(
            'id' => '1',
            'name' => 'concept' . $this->faker->text,
            'umlsUid' => 'umlsUid1',
            'preferred' => true,
            'scopeNote' => 'first scopeNote',
            'casn1Name' => 'casn' . $this->faker->text(120),
            'registryNumber' => $this->faker->text(20),
            'semanticTypes' => ['1', '2'],
            'terms' => ['1', '2'],
            'descriptors' => ['abc1']
        );
        $arr[] = array(
            'id' => '2',
            'name' => 'second concept',
            'umlsUid' => $this->faker->text(9),
            'preferred' => false,
            'scopeNote' => 'scopeNote' . $this->faker->text,
            'casn1Name' => 'second casn',
            'registryNumber' => 'abcd',
            'semanticTypes' => [],
            'terms' => [],
            'descriptors' => ['abc1']
        );

        return $arr;
    }

    public function create()
    {
        return array(
            'id' => '3',
            'name' => 'concept' . $this->faker->text(180),
            'umlsUid' => $this->faker->text(9),
            'preferred' => true,
            'scopeNote' => 'scopeNote' . $this->faker->text,
            'casn1Name' => 'casn' . $this->faker->text(120),
            'registryNumber' => $this->faker->text(20),
            'semanticTypes' => [],
            'terms' => ['1'],
            'descriptors' => []
        );
    }

    public function createInvalid()
    {
        return array(
            'id' => 'bad'
        );
    }

    /**
     * Mesh concept IDs are strings so we have to convert them
     * @inheritdoc
     */
    public function createMany($count)
    {
        $data = parent::createMany($count);

        return array_map(function (array $arr) {
            $arr['id'] = (string) $arr['id'];

            return $arr;
        }, $data);
    }
}
