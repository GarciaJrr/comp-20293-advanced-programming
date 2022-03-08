<?php
require_once __DIR__ . '/../src/Program2.php';

class Program2Test extends \PHPUnit\Framework\TestCase
{
    public function testGetName()
    {
        $program2 = new Program2();
        $program2->setName('Florante');
        $this->assertEquals($program2->getName(), 'Florante');
    }

    public function testGetAge()
    {
        $program2 = new Program2();
        $program2->setAge(22);
        $this->assertEquals($program2->getAge(), 22);
    }

    public function testFaveColor()
    {
        $program2 = new Program2();
        $program2->setFaveColor('Gray');
        $this->assertEquals($program2->getFaveColor(), 'Gray');
    }

    public function testGetNameCheckString()
    {
        $program2 = new Program2();
        $program2 ->setName('Florante');
        $this->assertIsString($program2->getName(), 'Florante');
    }

    public function testGetAgeCheckInt()
    {
        $program2 = new Program2();
        $program2->setAge(21);
        $this->assertIsInt($program2->getAge(), 21);
    }

    public function testGetAgeCheckNumeric()
    {
        $program2 = new Program2();
        $program2->setAge(21);
        $this->assertIsNumeric($program2->getAge(), 21);
    }
    
    public function testFaveColorCheckString()
    {
        $program2 = new Program2();
        $program2->setFaveColor('Gray');
        $this->assertIsString($program2->getFaveColor(), 'Gray');
    }

    public function testGetTogetherInput()
    {
        $program2 = new Program2();
        $program2->setTogetherInput('Florante', 22, 'Gray');
        $this->assertEquals($program2->getTogetherInput(), 'Florante', 22, 'Gray');
    }
}