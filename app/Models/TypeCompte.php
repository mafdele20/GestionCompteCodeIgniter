<?php namespace App\Models;
use CodeIgniter\Model;
class TypeCompte extends Model
{
    protected $table = 'typecomptes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['libelle'] ;
 
    public function getTypeCompte($type)
    {
     return $this->where('libelle',$type)->first();
    }
    

}
