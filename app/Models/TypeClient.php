<?php namespace App\Models;
use CodeIgniter\Model;
class TypeClient extends Model
{
    protected $table = 'typeclients';
    protected $primaryKey = 'id';
    protected $allowedFields = ['libelle'] ;
 
    public function getTypeClient($libelle)
    {
     return $this->where('libelle', $libelle)->first();
    }
    

}
