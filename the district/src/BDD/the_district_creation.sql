
-- Base de données : `the_district`
--


--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int AUTO_INCREMENT PRIMARY KEY ,
  `libelle` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` varchar(10) NOT NULL
) ;



--
-- Structure de la table `plat`
--

CREATE TABLE `plat` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `libelle` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_categorie` int NOT NULL REFERENCES categorie(id),
  `active` varchar(10) NOT NULL
) ;


--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
                            `id` int AUTO_INCREMENT PRIMARY KEY,
                            `id_plat` int NOT NULL REFERENCES plat(id),
                            `quantite` int NOT NULL,
                            `total` decimal(10,2) NOT NULL,
                            `date_commande` datetime NOT NULL,
                            `etat` varchar(50) NOT NULL,
                            `nom_client` varchar(150) NOT NULL,
                            `telephone_client` varchar(20) NOT NULL,
                            `email_client` varchar(150) NOT NULL,
                            `adresse_client` varchar(255) NOT NULL
) ;

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `nom_prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ;

INSERT into plat (id,libelle,description,prix,image,id_categorie,active)
VALUES ("4","District Burger","Burger composé d’un bun’s du boulanger, deux steaks de 80g (origine française), de deux tranches poitrine de porc fumée, de deux tranches cheddar affiné, salade et oignons confits. .","8.00","hamburger.jpg","5","Yes"),
("5","Pizza Bianca","Une pizza fine et croustillante garnie de crème mascarpone légèrement citronnée et de tranches de saumon fumé, le tout relevé de baies roses et de basilic frais.","14.00","pizza-salmon.png","4","Yes"),
("9","Buffalo Chicken Wrap","Du bon filet de poulet mariné dans notre spécialité sucrée & épicée, enveloppé dans une tortilla blanche douce faite maison.","5.00","buffalo-chicken.webp","9","Yes"),
("10","Cheeseburger","Burger composé d’un bun’s du boulanger, de salade, oignons rouges, pickles, oignon confit, tomate, d’un steak d’origine Française, d’une tranche de cheddar affiné, et de notre sauce maison.","8.00","cheesburger.jpg","5","Yes"),
("12","Spaghetti aux légumes","Un plat de spaghetti au pesto de basilic et légumes poêlés, très parfumé et rapide","10.00","spaghetti-legumes.jpg","10","Yes"),
("13","Salade César","Une délicieuse salade Caesar (César) composée de filets de poulet grillés, de feuilles croquantes de salade romaine, de croutons à l'ail, de tomates cerise et surtout de sa fameuse sauce Caesar. Le tout agrémenté de copeaux de parmesan.","7.00","cesar_salad.jpg","13","Yes"),
("14","Pizza Margherita","Une authentique pizza margarita, un classique de la cuisine italienne! Une pâte faite maison, une sauce tomate fraîche, de la mozzarella Fior di latte, du basilic, origan, ail, sucre, sel & poivre...","14.00","pizza-margherita.jpg","4","Yes"),
("15","Courgettes farcies au quinoa et duxelles de champignons","Voici une recette équilibrée à base de courgettes, quinoa et champignons, 100% vegan et sans gluten!","8.00","courgettes_farcies.jpg","14","Yes"),
("16","Lasagnes","Découvrez notre recette des lasagnes, l'une des spécialités italiennes que tout le monde aime avec sa viande hachée et gratinée à l'emmental. Et bien sûr, une inoubliable béchamel à la noix de muscade.

","12.00","lasagnes_viande.jpg
","10","Yes"),
("17","Tagliatelles au saumon","Découvrez notre recette délicieuse de tagliatelles au saumon frais et à la crème qui qui vous assure un véritable régal!  

","12.00","tagliatelles_saumon.webp
","10","Yes")



