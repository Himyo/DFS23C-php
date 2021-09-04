## Anonymous Delivery

> Une erreur git a causer la perte des fichiers representant les differentes entités en BDD le but de l'exercice va etre de les retablir

> Vous pouvez trouver un dump de la bdd dans le fichier dump.sql. Vous pouvez importer ce fichier dans phpMyAdmin via votre installation ou le docker utiliser en class
> Le schema résumé de la BDD est le suivant
---
> ### `Vehicule`
> - int `id` 
> - string `name`

> ### `Address`
> - int `id`
> - int `number`
> - string `street`
> - string `complementary`

> ### `Driver`
> - int `id`
> - string `firstname`
> - string `lastname`
> - int `vehiculeId` (un seul par driver)

> ### `Order`
> - int `id`
> - int `price`
> - int `deliveryAddressId` (une seule par order)
> - int `pickupAddressId` (une seule par order)
> - string `description`
---

- Dans un premier temps recréer les entités manquantes. Commencer par créer un Vehicule.php, Address.php puis Driver.php et Order.php

- Apres avoir créer ces entités trouver un moyen d'ajouter à toute les classes une proprieté qui sera commune à toute les entités `createdAt` qui aura pour valeur `date('d M Y')` ainsi qu'un getter `getCreatedAt`

- Maintenant que les entités ont été créer on souhaite implementer la methode `getTableName` sur les entités qui va retourner le nom de la table correspondant à la class en BDD. Cette methode devra exister sur toute les presentes et futur entités donc on souhaite trouver le moyen de forcer les developpeurs à l'implementer. Trouvez une solution a cette problematique et ensuite mettez en place cette methode dans les differentes classes.
