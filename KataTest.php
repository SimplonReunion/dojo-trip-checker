<?php

require 'kata.php';

class KataTest extends \PHPUnit_Framework_TestCase
{
    protected $stations;
    protected $links;

    public function setUp()
    {
        $this->stations = ["ADL", "MEL", "SYD", "BRI"];
        $this->links =  ["ADL" => ["MEL"], "MEL" => ["ADL", "SYD"],  "SYD" => ["BRI"]];
    }

    public function testTripPossibleStartToEnd()
    {
        $this->assertEquals("Possible", check_trip("ADL", "BRI", $this->stations, $this->links));
    }

    public function testTripPossibleAStationToEnd()
    {
        $this->markTestSkipped();
        $this->assertEquals("Possible", check_trip("MEL", "BRI", $this->stations, $this->links));
    }

    public function testTripImpossible()
    {
        $this->markTestSkipped();
        $this->assertEquals("Impossible", check_trip("SYD", "ADL", $this->stations, $this->links));
    }
}
