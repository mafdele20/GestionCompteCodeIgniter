<?php namespace App\Models;
use CodeIgniter\Model;
class ClientModel extends Model
{

    protected $table = 'clients';
    protected $primaryKey = 'id';
    protected $allowedFields = ['employeur_id', 'type_client_id', 'email', 'adresse', 'telephone', 'nom', 'prenom', 'salaire', 'nomEntreprise'] ;
 
    public function getClient($id)
    {
     return $this->where('id', $id)->first();
    }
}
