afficher le nombre de conducteur 
SELECT * FROM conducteur

afficher le nombre de vehicule
SELECT * FROM vehicule

afficher le nombre d'association
SELECT * FROM association_vehicule_conducteur
'
afficher les vehicule n''ayant pas de conducteur
SELECT * FROM association_vehicule_conducteur
where id_conducteur is null

afficher les conducteurs n''ayant pas de vehicule
SELECT * FROM association_vehicule_conducteur
where id_vehicule is null

afficher les vehicules conduit par philippe pandre
SELECT * FROM association_vehicule_conducteur
where id_conducteur like "philippe%";

Afficher tous les conducteurs (meme ceux qui n'ont pas de correspondance) ainsi que les vehicules

Afficher les conducteurs et tous les vehicules (meme ceux qui n'ont pas de correspondance)

Afficher tous les conducteurs et tous les vehicules, peut importe les correspondances.