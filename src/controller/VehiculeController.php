<?php

// PagesController.php

class VehiculeController extends Db {

    public function home() {

        view('vehicule.home');

    }

    public function save(){
        $vehicule = new Conducteur;
        $vehicule->getMarque($_POST['marque']);
        $vehicule->getModele($_POST['modele']);
        $vehicule->getCouleur($_POST['couleur']);
        $vehicule->getImmatriculation($_POST['immatriculation']);

        $vehicule->save();
        redirection('list-vehicule')
    }


    public function list(){
        $vehicule = vehicule::FindAll();
        view('vehicule-list', compact('vehicule'));
    }
}