<?php
/**
 * OOP in php
 * 
 */
class SoilModal extends Connection{
    // private $temperature;  temperature of device 
    // private $device; moisture of soil
    private $moisture;
    private $soil;
    

    function __construct($soil="",$moisture=""){
        parent::__construct();
        $this->moisture=$moisture;
        $this->soil=$soil;
    }

   function save(){
       try{
            $stm = $this->db->prepare("INSERT INTO soil (soil_type,moisture) VALUES (?,?)");
            $stm->execute([$this->soil, $this->moisture]);
            header("Location: index.php");
        }
        catch(Exception $e){
            echo "Hello";
            return $e->getMessage();
        }
   }

   function search($keyword){
    try{
        $stm = $this->db->prepare("SELECT * FROM soil WHERE soil_type LIKE '%$keyword%' or moisture LIKE '%$keyword%'");
        $stm->execute();
        return $stm->fetchAll();
    }
    catch(Exception $e){
        return $e->getMessage();
    }
   }



   function getAll(){
        try{
            $stm = $this->db->prepare("SELECT * FROM soil");
            $stm->execute();
            return $stm->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
   }
}
?>