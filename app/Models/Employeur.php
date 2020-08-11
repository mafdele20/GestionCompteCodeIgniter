<?php namespace App\Models;
use CodeIgniter\Model;

class Employeur extends Model
{
    protected $table = 'employeurs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nomEmployeur', 'raisonSociale', 'cni'] ;
 
    
}
