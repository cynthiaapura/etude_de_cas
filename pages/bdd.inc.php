<?php

    try{// On teste la connexion à la bdd
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;port=8889;dbname=produit_info', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
    
    // On récupère tout le contenu de la table livre
        $reponse = $bdd->query('SELECT * FROM produit');
        
        // On affiche chaque entrée une à une
        while ($donnees = $reponse->fetch()){
        /*echo "<pre>";
        print_r ($donnees);
        echo "</pre>";*/
        echo "<li> Type : " .$donnes['designation']. "</li>
        echo <li> Prix : " .$donnes['prix']. "</li>
        echo <li> Categorie : " .$donnes['categorie']. "</li>";
        
        // on affiche les informations de l'enregistrement en cours
        // pour tester avant echo "<pre>".print_r($donnees)."</pre>";
        }

        $reponse->closeCursor(); // Termine le traitement de la requête

        }
    //partie finale
    catch(Exception $e){
    // En cas d'erreur on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
    }

?>