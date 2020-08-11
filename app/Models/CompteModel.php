<?php namespace App\Models;
use CodeIgniter\Model;

class CompteModel extends Model
{
   protected $table = 'comptes';
   protected $primaryKey = 'id';
   protected $allowedFields = ['type_compte_id', 'client_id', 'cleRib', 'date', 'numero', 'solde', 'frais', 'etat'] ;

   public function getEtat($id)
   {
   return $this->where('etat', $id)->first();
   }
}