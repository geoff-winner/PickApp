<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Event.php";

    $DB = new PDO('pgsql:host=localhost;dbname=pickapp_test');

    class EventTest extends PHPUnit_Framework_TestCase
    {

        protected function tearDown()
        {
            Event::deleteAll();
        }

        function test_setId()
        {
            //Arrange
            $name = "Baseball Game";
            $location = "Overlook Park";
            $event_time = "2015/12/12 14:00:00";
            $reqs = "Bring a glove.";
            $description = "n/a";
            $skill_level = "Beginner";
            $id = 1;
            $test_event = new Event($name, $location, $event_time, $reqs, $description, $skill_level, $id);
            //Act
            $result = $test_event->getId();
            //Assert
            $this->assertEquals($id, $result);
        }

        function test_getName()
        {
            //Arrange
            $name = "Baseball Game";
            $location = "Overlook Park";
            $event_time = "2015/12/12 14:00:00";
            $reqs = "Bring a glove.";
            $description = "n/a";
            $skill_level = "Beginner";
            $id = 1;
            $test_event = new Event($name, $location, $event_time, $reqs, $description, $skill_level, $id);
            //Act
            $result = $test_event->getName();
            //Assert
            $this->assertEquals($name, $result);

        }

        function test_getLocation()
        {
            //Arrange
            $name = "Baseball Game";
            $location = "Overlook Park";
            $event_time = "2015/12/12 14:00:00";
            $reqs = "Bring a glove.";
            $description = "n/a";
            $skill_level = "Beginner";
            $id = 1;
            $test_event = new Event($name, $location, $event_time, $reqs, $description, $skill_level, $id);
            //Act
            $result = $test_event->getLocation();
            //Assert
            $this->assertEquals($location, $result);

        }

        function test_getEventTime()
        {
            //Arrange
            $name = "Baseball Game";
            $location = "Overlook Park";
            $event_time = "2015/12/12 14:00:00";
            $reqs = "Bring a glove.";
            $description = "n/a";
            $skill_level = "Beginner";
            $id = 1;
            $test_event = new Event($name, $location, $event_time, $reqs, $description, $skill_level, $id);
            //Act
            $result = $test_event->getEventTime();
            //Assert
            $this->assertEquals($event_time, $result);

        }

        function test_getDescription()
        {
            //Arrange
            $name = "Baseball Game";
            $location = "Overlook Park";
            $event_time = "2015/12/12 14:00:00";
            $reqs = "Bring a glove.";
            $description = "n/a";
            $skill_level = "Beginner";
            $id = 1;
            $test_event = new Event($name, $location, $event_time, $reqs, $description, $skill_level, $id);
            //Act
            $result = $test_event->getDescription();
            //Assert
            $this->assertEquals($description, $result);

        }

        function test_getSkillLevel()
        {
            //Arrange
            $name = "Baseball Game";
            $location = "Overlook Park";
            $event_time = "2015/12/12 14:00:00";
            $reqs = "Bring a glove.";
            $description = "n/a";
            $skill_level = "Beginner";
            $id = 1;
            $test_event = new Event($name, $location, $event_time, $reqs, $description, $skill_level, $id);
            //Act
            $result = $test_event->getSkillLevel();
            //Assert
            $this->assertEquals($skill_level, $result);

        }

    function test_getAll()
    {
        $name = "Baseball Game";
        $location = "Overlook Park";
        $event_time = "2015-12-12 14:00:00";
        $reqs = "Bring a glove.";
        $description = "n/a";
        $skill_level = "Beginner";
        $test_event = new Event($name, $location, $event_time, $reqs, $description, $skill_level);
        $test_event->save();

        $name2 = "Soccer Game";
        $location2 = "Irving Park";
        $event_time2 = "2015-10-10 16:00:00";
        $reqs2 = "Bring boots.";
        $description2 = "3 on 3 soccer";
        $skill_level2 = "Intermediate";
        $test_event2 = new Event($name2, $location2, $event_time2, $reqs2, $description2, $skill_level2);
        $test_event2->save();

        //Act
        $result = $test_event->getAll();
        //Assert
        $this->assertEquals([$test_event, $test_event2], $result);

    }



    }



?>
