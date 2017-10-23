<?php

class Ctrl_Medicator extends CI_Controller 
{
    
//    public function index()
//    {
//       
//        
//        $this->load->view("v_AccueilGB");
//        
//        
//        
//    }

    
    //PAGE REGION
    
    
    public function GetRegion(){
        
        
        
         //Appel du Model : Model_Region
        $this->load->model("Model_Region");  
        
        //Appel de la fonction dans Model_Region
        $data['lesRegions']= $this->Model_Region->GetAllRegions();
        
       
        
        //Appel de la view
        $this->load->view("v_Region", $data);
    }
    
    
    
    
    public function ModifierUneRegion(){
        
        $data1 = $_POST['nomregion'];
        $idRegion = $_POST['idRegion'];
//            echo($data1);
//            echo($idRegion);
            
           $this->load->model("Model_Region");
           $this->Model_Region->ModifierRegion($data1,$idRegion);
    }
    
    
    //PAGE VISITEUR 
    
    public function GetVisiteur(){
        
        
        
        
        $this->load->model("Model_Visiteur");
        
        $data['lesVisiteurs'] = $this->Model_Visiteur->GetAllVisiteurs();
        
              
        $this->load->view("v_Visiteur", $data);
        
        
    }
    
    public function InsertionVisiteur(){
        
        $matricule = $_POST['matricule'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];
        $dateE = $_POST['dateE'];
        $codeSec = $_POST['codeSec'];
        $codeLabo = $_POST['codeLabo'];
        
        $this->load->model("Model_Visiteur");
        $this->Model_Visiteur->InsererVisiteur($matricule, $nom, $prenom, $adresse, $cp, $ville, $dateE, $codeSec, $codeLabo);
        
        
        
    }
    
    public function ModificationVisiteur(){
        
        
        
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];
        $dateE = $_POST['dateE'];
        $codeSec = $_POST['codeSec'];
        $codeLabo = $_POST['codeLabo'];
        $idVisiteur = $_POST['idVisiteur'];
        
        $this->load->model("Model_Visiteur");
        $this->Model_Visiteur->ModifierVisiteur($nom, $prenom, $adresse, $cp, $ville, $dateE, $codeSec, $codeLabo, $idVisiteur);
        
        
    }
    
    
}




