<?php

require_once 'Human.php';

class HumanTest extends PHPUnit_Framework_TestCase
{
    public function testHumanIsCreatedWithNick ()
    {
        $fixture = new Human('joe');
        $nick = $this->readAttribute($human, 'nick');
        $this->assertEquals('joe', $nick);
    }
    
}