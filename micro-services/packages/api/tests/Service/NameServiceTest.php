<?php


use tajawal\Api\Service\SearchNameService;

class NameServiceTest extends \PHPUnit\Framework\TestCase
{

    protected $data = [
        [
            'name' => 'test',
            'price' => 79,
            'city' => 'Manila',
            'availability' => [
                ['from' => '22-10-2020',
                    'to' => '22-11-2020'],
                ['from' => '22-10-2020',
                    'to' => '22-11-2020'],
                ['from' => '22-10-2020',
                    'to' => '22-11-2020']
            ]
        ]
    ];


    protected $nameServiceObject;

    public function setUp()
    {
        $this->nameServiceObject = new SearchNameService('test');
    }

    public function testSearchNameService()
    {
        $this->nameServiceObject->setHotels($this->data);
        $this->nameServiceObject->search();
        $this->assertEquals($this->data, $this->nameServiceObject->search());
    }


}
