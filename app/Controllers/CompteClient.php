<?php namespace App\Controllers;
use App\Models\CompteModel;
use App\Models\ClientModel;
use App\Models\TypeCompte;
use App\Models\TypeClient;

class CompteClient extends BaseController
{
	public function index()
	{
        helper(['form','url']);
		return view('compte/add');
	}

    //--------------------------------------------------------------------
    
    public function add()
	{
          helper(['form', 'url']);
         
     
        $modelCompte = new CompteModel();
        $ClientModel = new ClientModel();
        $typeCompteModel = new TypeCompte();
        $typeClientModel = new TypeClient();
        if(isset($_POST['valider']))
        {
            extract($_POST);      
        
            if(isset($ancien)){
               $client = $ClientModel->getClient($idclient);    
               $type = $typeCompteModel->getTypeCompte($typeCompte);    
               $typ = (intval($type['id']));
          
                $data = [
                    'type_compte_id' => $typ,
                    'client_id' => $idclient,
                    'cleRib'  => "comp-".$numCompte,
                    'date'  => $this->request->getVar('dateO'),
                    'numero'  => $this->request->getVar('numCompte'),
                    'solde'  => $this->request->getVar('solde'),
                    'frais'  => $this->request->getVar('agio'),
                    'etat'  => 1
                    ];
    
             $ok =1;
      
               if ($client != null && $type != null){

                  $save = $modelCompte->insert($data);
      
               }else{
                  $ok = 0;
               }   
                  $data['ok'] = $ok;
            
                  return view('compte/add',$data);
         
            }
            if(isset($nouveau)){
               
                  $type =$typeClientModel->getTypeClient($typeClient);
                  $typp = intval($type['id']);
               
                  $client = [
                    'type_client_id' =>  $typp,
                    'email' => $email,
                    'adresse'  => $adresse,
                    'telephone'  => $tel,
                    'prenom'  => $prenom,
                    'salaire'  => $salaire,
                    'nomEntreprise'  => $nomentreprise,
                    ];
                    $cli = $ClientModel->insert($client);
                    $type = $typeCompteModel->getTypeCompte($typeCompte);    
                    $typ = (intval($type['id']));
                    $compte = [
                        'type_compte_id' => $typ,
                        'client_id' => $cli,
                        'cleRib'  => "comp-".$numCompte,
                        'date'  => $this->request->getVar('dateO'),
                        'numero'  => $this->request->getVar('numCompte'),
                        'solde'  => $this->request->getVar('solde'),
                        'frais'  => $this->request->getVar('agio'),
                        'etat'  => 1
                        ];
                
                     $comp =$modelCompte->insert($compte);
      
                     if($comp != null &&  $cli != null ){
                        $ok = 1;
                        $data['ok'] = $ok;
                        return view('compte/add',$data);
                     }else{
                       $ok = 2;
                       $data['ok'] = $ok;
                       return view('compte/add',$data);
                     }
      
            }
        
        }else{
            return $this->view->load("compte/add");
        }
        helper(['form','url']);
		return view('compte/liste');
    }
    
    public function liste()
	{
        $compteModel = new CompteModel();
        helper(['form','url']);
        $data['listeCompte'] = $compteModel->findAll();
		return view('compte/liste',$data);
	}

}
