<?php

    /**
     * @backupGlobals disabled
     * @backupStaticAttributes disabled
     */

     require_once "src/Stylist.php";

     $DB = new PDO('pgsql:host=localhost;dbname=hair_salon_test');


     class StylistTest extends PHPUnit_Framework_TestCase
{

          // protected function tearDown()
          // {
          //   Stylist::deleteAll();
          //   Client::deleteAll();
          // }

     function test_getPerson()
        {
            //Arrange
            $person = "Monica";
            $id = null;
            $test_Stylist = new Stylist($person,$id);

            //Act
            $result = $test_Stylist->getPerson();

            //Assert
            $this->assertEquals($person, $result);
        }

        function test_setPerson()
        {
            //Arrange
            $person = "Monica";
            $id = null;
            $test_Stylist = new Stylist($person, $id);

            //Act
            $test_Stylist->setPerson("Stacy");

            //Assert
            $result = $test_Stylist->getPerson();
            $this->assertEquals("Stacy", $result);
        }

        function test_getId()
        {
            //Arrange
            $person = "Monica";
            $id = 1;
            $test_id = new Stylist($person, $id);
            //Act
            $result = $test_id->getId();
            //Assert
            $this->assertEquals(1, $result);
        }

        function test_setId()
        {
            //Arrange
            $person = "Monica";
            $id = null;
            $test_id = new Stylist($person, $id);
            //Act
            $test_id->setId(1);
            //Assert
            $result = $test_id->getId();
            $this->assertEquals(1, $result);
        }

        function test_save()
        {
        //Arrange
        $person = "Monica";
        $id = null;
        $test_stylist = new Stylist($person, $id);

        //Act
        $test_stylist->save();

        //Assert
        $result = Stylist::getAll();
        $this->assertEquals($test_stylist, $result[0]);
        }

        function test_getAll()
        {
        //Arrange
        $person = "Monica";
        $id = null;
        $person2 = "Tracie";
        $id2 = null;
        $test_Stylist = new Stylist($person, $id);
        $test_Stylist->save();
        $test_Stylist2 = new Stylist($person2, $id2);
        $test_Stylist2->save();

        //Act
        $result = Stylist::getAll();

        //Assert
        $this->assertEquals([$test_Stylist, $test_Stylist2], $result);
        }

        function test_find()
       {
           //Arrange
           $person = "Mo";
           $id = null;
           $person2 = "Lo";
           $id2 = 2;

           $test_Stylist = new Stylist($person, $id);
           $test_Stylist->save();

           $test_Stylist2 = new Stylist($person2, $id2);
           $test_Stylist2->save();

           //Act
           $id_to_find = $test_Stylist2->getId();
           $result = Stylist::find($id_to_find);

           //Assert
           $this->assertEquals($test_Stylist2, $result);
       }


       function testGetClients(){
         //Arrange
         $person = "Stuff";
         $id = null;
         $test_stylist= new Stylist($person, $id);
         $test_stylist->save();
         $stylist_id = $test_stylist->getId();
         $person = "Email client";
         $address = "main street";
         $test_client = new Client($id, $person, $address, $stylist_id);
         $test_restaurant->save();
         $person2 = "Meet with boss";
         $address2 = "main stress";
         $test_client2 = new Client($id, $name2, $address2, $stylist_id);
         $test_client2->save();
         //Act
         $result = $test_stylist->getClients();
         //Assert
         $this->assertEquals([$test_client, $test_client2], $result);
     }






}
?>
