
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/compte.css'); ?>">
    <script type='text/javascript' src="<?php echo base_url('js/compte.js'); ?>"></script>
</head>
<body>
    <div class="compte">
        <nav class="navbar">
        <div class="row">
           <div class="col-25">
           <img src="<?php echo base_url('image/logo.jpeg'); ?>" alt="logo" id="logo"/>
             <h1>BANQUE DU PEUPLE</h1>
           </div>
           <div class="col-75">
            <ul>
            <li><a href="<?php echo base_url('CompteClient'); ?>">Ajout Compte</a></li>
                <li><a href="<?php echo base_url('CompteClient/liste'); ?>">Liste des Comptes</a></li>
                <li><img src="<?php echo base_url('image/user-connect.png') ?>" alt="Avatar" class="user"><a> gadiaga</a></li>
                <li id="connexion"><a onclick="deconnexion()" id="deconect">Déconnexion</a></li>   
            </ul>
           </div>
       </div>
        </nav>
        <div class="corps">
    
        <div class="sliderBar">
          <div class="espace">

          </div>
           <div class="action">
               <div class="slb-blanc"><a href="<?php echo base_url('CompteClient'); ?>"> Creer un Compte</a></div>
               <div class="slb-degrade"><a href=""> Faire un Virement </a></div>
               <div class="slb-blanc"><a href="">Bloquer un Compte</a></div>
               <div class="slb-degrade"><a href="">Fermer unCompte</a></div>
               <div class="slb-blanc"><a href=""> Archiver un compte</a></div>
               <div class="slb-degrade"><a href="<?php echo base_url('CompteClient/liste'); ?>">liste des Comptes</a></div>
       
           </div>
         
        </div>
        <div class="container">  
            <h1>liste de tous les Comptes</h1>
          <div classe="tab" class="tab">
          
            <table id="listecompte">
            <thead>
              <tr>
                
                    <th>id Compte</th>
                    <th>Numero</th>
                    <th>Agence</th>
                    <th>cléRib</th>
                    <th>Date Ouverture</th>
                    <th>Solde</th>
                    <th>Type de compte</th>           
                    <th>Frais</th>
                    <th>Propriétaire</th>
                    <th>Action</th>
                    <th>Action</th>
              </tr>
            </thead>
             <tbody>
             <?php
                  foreach($listeCompte as $compte){
                 ?>
                      <tr>
                          <td><?= $compte['id'] ?></td>
                          <td><?= $compte['numero'] ?></td>
                          <td><?= $compte['cleRib'] ?></td>
                          <td><?= $compte['date'] ?></td>
                          <td><?= $compte['solde'] ?></td>
                          <td><?= $compte['type_compte_id'] ?></td>
                          <td><?= $compte['etat'] ?></td>
                          <td><?= $compte['frais'] ?></td>
                          <td><?= $compte['client_id'] ?></td>  
                          <td><a href="{$url_base}Compte/delete/{$compte->getId()}">delete</a></td>
                          <td><a href="{$url_base}Compte/edite/{$compte->getId()}">edit</a></td>
                      </tr>
              <?php
                  }
               ?>
             </tbody>

            </table>
    
          </div>
            <div id="status"></div>
          </div>
       
    </div>
  </div>
     
</body>
</html>