<?php

    /**
     * @backupGlobals disabled
     * @backupStaticAttributes disabled
     */

     require_once "src/Stylist.php";

    //  $DB = new PDO('pgsql:host=localhost;dbname=restaurant');


     class StylistTest extends PHPUnit_Framework_TestCase
{
     function test_getName()
        {
            //Arrange
            $name = "Monica";
            $id = null;
            $test_Stylist = new Stylist($name,$id);

            //Act
            $result = $test_Stylist->getName();

            //Assert
            $this->assertEquals($name, $result);
        }


}
?>
