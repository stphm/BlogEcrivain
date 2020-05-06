<?php
namespace App\Controller;

use App\Model\UserManager;
use App\Model\ArticleManager;
use App\Model\CommentManager;



class Users {
     // Connecter 
    public function connectUser() 
    {
        $userManager = new UserManager();
        
        if (isset($_POST['submit_connect'])) {
            $username = $_POST['identifiant'];
            $connect = $userManager->username($username);    


        }
        // vérifie si le button login existe 
        // Test si les champs sont remplis
        // verifie si le $_POST['username'] == username de la BDD  && $_POST['password'] == password_user de la BDD 
        // envoie la page adminView
    include 'view/connectView.php';
    }

    //Afficher le tableau de bord
    public function dashboard()
    {
        //Affiche un tableau avec tous les chapitres et les actions (voir, modifier et supprimer)
        // Un autre tableau avec tous les commentaires signalés avec les actions (ignorer et supprimer)
        // un bouton d'ajouter un nouveau article => envoie une nouvelle page (formulaire sous forme TinyMCE)
        $i = 1;
        $articleManager = new ArticleManager();
        $commentManager = new CommentManager();
        $dashboard = $articleManager->getAllArticles();
        $dashboard = $commentManager->getAllReported();
        include 'view/adminView.php';

    }


}