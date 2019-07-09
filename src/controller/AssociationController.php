<?php

class AssociationController {
    // Route: GET registrations
    public function list() {

        $rAssociation = Association::findAll();
        view ('Association.list', compact('Association'));
    }

    // Route: GET registrations/add
    public function add() {

        $vehicule = vehicule::findAll();
        $conducteur = conducteur::findAll();
        view ('Association.add', compact('conducteur', 'vehicule'));
    }

    // Route: POST registrations/add
    public function save() {
        $Association = new Association;
        $Association->setConducteurId($_POST['conducteur_id']);
        $Association->setVehiculeId($_POST['vehicule_id']);
        $Association->save();

        redirectTo('Association');
    }

    // Route: GET registrations/$id/edit
    public function edit($id) {
        $conducteur = Student::findAll();
        $vehicule = Course::findAll();
        $Association = Association::findOne($id);
        view ('Association.edit', compact('Association', 'conducteur', 'vehicule'));
    }

    // Route: POST registrations/$id/edit
    public function update($id) {
        $Association = Association::findOne($id);
        $Association->setConducteurId($_POST['conducteur_id']);
        $Association->setVehiculeId($_POST['vehicule_id']);
        $Association->update();

        redirectTo('Association');
    }

    // Route: GET registrations/$id/delete
    public function delete($id) {
        $conducteur = Association::findOne($id);
        $conducteur->delete();

        redirectTo('Association');
    }

    // Route: GET registrations/$id
    public function show($id) {
        view ('Association.show');
    }
}