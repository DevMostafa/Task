<?php

use \Core\Library\TripSorter\Transportation\Train;

class TrainTest extends PHPUnit_Framework_TestCase
{

    protected $train;

    protected $trip = array(
        'Departure' => 'A',
        'Arrival' => 'B',
        'Transportation' => 'Train',
        'Transportation_number' => '10A',
    );

    public function setUp()
    {
        $this->train = new Train($this->trip);
    }

    public function testPrintMessage()
    {
        $message = $this->train->getMessage();
        $this->assertTrue(strlen($message) > 0);
    }
}
