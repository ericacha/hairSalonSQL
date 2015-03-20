<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */
    require_once "src/Stylist.php";
    require_once "src/Client.php";

     $DB = new PDO('pgsql:host=localhost;dbname=hair_salon_test');

    class ClientTest extends PHPUnit_Framework_TestCase
{

    function test_getName()
            {
                //Arrange
                $name="Work Stuff";
                $id= null;
                $test_stylist = new Stylist($name, $id);
                $test_stylist->save();
                $stylist_id= $test_stylist->getId();
                $name = "Olive Garden";
                $address = "Main Street";
                $test_client = new Client($id, $name,  $address, $stylist_id);
                $test_client->save();

                //Act
                $result = $test_client->getName();

                //Assert
                $this->assertEquals($name, $result);
            }

            function test_save(){
            //Arrange
            $person="American";
            $id=null;
            $new_stylist= new Stylist($person,$id);
            $new_stylist->save();
            $stylist_id=$new_stylist->getId();
            $name = "Olive Garden";
            $address = "Main Street";
            $test_client = new Client($id, $name,  $address, $stylist_id);
            //Act
            $test_client->save();
            $result = Client::getAll();
            //Assert
            $this->assertEquals($test_client, $result[0]);
          }

          
}

?>
