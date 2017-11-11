<?php

class Model_ContreIndicationPC extends CI_Model
{
  
    
     public function GetAllContreIndication(){
        $sql= $this->db->query("SELECT * FROM medicament");
        return $sql->result();
     }
     public function GetContreIndicsByIds($depotMed)
             {
         $sql= $this->db->query("SELECT MED_CONTREINDIC FROM `medicament` WHERE MED_DEPOTLEGAL='".$depotMed."'");
         return $sql->result();
             }
    
}