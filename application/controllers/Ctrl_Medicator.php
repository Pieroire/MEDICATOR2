<?php

class Ctrl_Medicator extends CI_Controller 
{

      public function index()
    {
       
            
            $this->load->view("v_AccueilPC");
            
            
    }
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
    
    






    
  public function GetTypesIndividus()
        {
            
        
            //Appel du Model: Model_TypeIndividu
            $this->load->model("Model_TypeIndividu");
            
            //Appel de la fonction GetAllTypesIndividus() dans le model
            $data['lesTypesIndividus'] = $this->Model_TypeIndividu->GetAllTypesIndividus();
            
            $this->load->view("v_TypeIndividu",$data);
        }
public function InsertionLeTypeIndividu()
        {
            $data=$_POST['libelle'];    
            $data2=$_POST['code'];
            //echo $data;
            //echo $data2;
            
           // echo($data);
            $this->load->model("Model_TypeIndividu");
           $this->Model_TypeIndividu->InsererLeTypeIndividu($data2,$data);
           
           $this->GetTypesIndividus();
           
           // Attention ici tu recharges toutes la vue
           // DONC problème d'affichage
           // Je te laisse gérer :)
            //$this->load->view("v_TypeIndividu",$data); 
            }
            //Il faut que je reagarde, si il est necessaire de créer une nouvelle view
public function ModificationLeTypeIndividu()
        {
            $data=$_POST['nvlibelle'];
            $data2=$_POST['code'];
            
            //echo($data);
            //echo($data2);
           $this->load->model("Model_TypeIndividu");
            $this->Model_TypeIndividu->ModifierLeTypeIndividu($data,$data2);
          // $this->load->view("v_TypeIndividu",$data); 
        } 
public function GetMedicaments()
        {
        $this->load->model("Model_MedicamentPC");
       $data['lesMedicaments'] = $this->Model_MedicamentPC->GetAllMedicaments();
        
        $this->load->view("v_MedicamentPC",$data);
        }
public function InsertionLeMedicament()
        {
            $depot = $_POST['depot'];
            $nom = $_POST['nom'];
            $famille = $_POST['famille'];
            $compo = $_POST['composition'];
            $effets = $_POST['effets'];
            // echo($effets);
            $contreindic = $_POST['contre'];
            $prix = $_POST['prix'];
            $this->load->model("Model_MedicamentPC");
            $this->Model_MedicamentPC->InsererLeMedicament($depot,$nom,$famille,$compo,$effets,$contreindic,$prix);
            
        }
public function ModificationLeMedicament()
        {
            
            $nom = $_POST['nom2'];
            $famille = $_POST['famille2'];
            $compo = $_POST['composition2'];
            $effets = $_POST['effets2'];
            $contreindic = $_POST['contre2'];
            $prix = $_POST['prix2'];
            $idMedicament = $_POST['idMedicament'];
            $this->load->model("Model_MedicamentPC");
            $this->Model_MedicamentPC->ModifierLeMedicament($nom,$famille,$compo,$effets,$contreindic,$prix,$idMedicament);
            //essai
    
        }
        
        }

        ?>

<!-- data:"depot="+$('#txtDepot').val()+"&nom="+$('#txtNom').val()+"&famille="+$('#txtFam').val()+"&composition="+$('#txtCompo').val()+"&effets="+$('txtEffets')+"&contre="+$('#txtContre').val()+"&prix="+$('#txtPrix').val(),-->

