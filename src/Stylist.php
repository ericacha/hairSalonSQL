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

    function setPerson($new_person)
    {
        $this->person = (string) $new_person;
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
        $statement = $GLOBALS['DB']->query("INSERT INTO  name (person) VALUES ('{$this->getPerson()}') RETURNING id; ");
        $result    = $statement->fetch(PDO::FETCH_ASSOC);
        $this->setId($result['id']);
    }

    static function getAll()
    {
      $returned_stylist = $GLOBALS['DB']->query("SELECT * FROM name;");
      $stylists = array();
      foreach ($returned_stylist as $stylist) {
          $id = $stylist['id'];
          $person = $stylist['person'];
          $new_stylist = new Stylist($person, $id);
          array_push($stylists, $new_stylist);
    }
      return $stylists;
    }

    static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM name *;");
        }

    static function find($search_id)
    {
        $found_stylist = null;
        $stylists = Stylist::getAll();
        foreach ($stylists as $hair) {
            $stylist_id = $hair->getId();
            if ($stylist_id == $search_id) {
                $found_stylist = $hair;
            }
        }
        return $found_stylist;
    }

    function getClients()
    {
        $clients = Array();
        $returned_clients= $GLOBALS['DB']->query("SELECT * FROM clients WHERE stylist_id = {$this->getId()};");
        foreach ($returned_clients as $client) {
            $name           = $client['name'];
            $id             = $client['id'];
            $stylist_id     = $client['stylist_id'];
            $new_Client = new Client($id, $name, $stylist_id);
            array_push($clients, $new_Clients);
        }
        return $clients;
    }



}
?>
