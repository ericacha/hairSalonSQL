<?php

    class Stylist
{
    private $id;
    private $name;
    function __construct($name, $id = null)

    {
        $this->name = $name;
        $this->id = $id;

    }

    function setName($new_name)
    {
        $this->name = (string) $new_name;
    }

    funtion getName()
    {
        return $this->name;
    }

    function setId($new_id)
    {
        $this->id = (int) $new_id;
    }

    function getId()
    {
        return $this->id;
    }


}


?>
