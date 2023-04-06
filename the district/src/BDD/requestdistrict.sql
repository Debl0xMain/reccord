JOIN plat
ON plat.id_categorie = categorie.id
JOIN commande
on command.id_plat = plat.id;

        SELECT *
        FROM categorie
        order by id desc