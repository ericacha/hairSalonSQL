<?php

    class Stylist
{
    private $id;
    private $person;
    function __construct($person, $id = null)

    {
        $this->person = $person;
        $this->id = $id;

    }

    function setPerson($new_client)
    {
        $this->person = (string) $new_client;
    }

    function getPerson()
    {
        return $this->person;
    }

    function setId($new_id)
    {
        $this->id = (int) $new_id;
    }

    function getId()
    {
        return $this->id;
    }

    function save()
    {
        $statement = $GLOBALS['DB']->query("INSERT INTO  client (name) VALUES ('{$this->getPerson()}')RETURNING id; ");
        $result    = $statement->fetch(PDO::FETCH_ASSOC);
        $this->setId($result['id']);
    }
}


?>
