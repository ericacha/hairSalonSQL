<?php
class Client
{
    private $id;
    private $name;
    private $stylist_id;
    function __construct($id = null, $name, $address, $stylist_id)
    {
        $this->id         = $id;
        $this->name       = $name;
        $this->stylist_id = $stylist_id;
    }

    function getId()
        {
            return $this->id;
        }
        function setId($new_id)
        {
            $this->id = (int) $new_id;
        }
        function getName()
        {
            return $this->name;
        }
        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function setStylistId($new_stylistId)
        {
            $this->stylist_Id = (int) $new_stylistId;
        }
        function getStylistId()
        {
            return $this->stylist_id;
        }

        function save()
        {
        $statement = $GLOBALS['DB']->query("INSERT INTO clients (name, stylist_id) VALUES ('{$this->getName()}', {$this->getStylistId()}') RETURNING id;");
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        $this->setId($result['id']);
        }

        static function getAll()
        {
        $result_place = $GLOBALS['DB']->query("SELECT * FROM clients;");
        $places      = array();
        foreach ($result_food as $food) {
            $id         = $place['id'];
            $name       = $place['name'];
            $stylist_id = $place['stylist_id'];
            $new_food   = new Client($id, $name, $stylist_id);
            array_push($places, $new_food);
        }
        return $places;
        }
        static function deleteAll()
        {
      $GLOBALS['DB']->exec("DELETE FROM clients *;");
        }

      static function find($id_search)
      {
      $found_id = null;
      $ids      = CLient::getAll();
      foreach ($ids as $id) {
          $rest_id = $id->getId();
          if ($rest_id == $id_search) {
              $found_id = $id;
          }
      }
      return $found_id;
      }


  }

  ?>
