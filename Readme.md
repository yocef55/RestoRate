  #1- Création du projet:

composer create-project symfony/website-skeleton RestoRate

#2- installation doctrine: bibliothèque fournir des outils puissants pour rendre les interactions avec les bases de données faciles et flexibles.

a- composer require symfony/orm-pack 

b- composer require symfony/maker-bundle --dev 
#3-configuration base de donne:

Les paramètres de la connexion à la base de donne sont stockées dans la variable DATABASE_URL qui existe dans la fichier .env.
Exemple:
DATABASE_URL=‘mysql://db_user:db_password@127.0.0.1:3306/db_name’
db_user: root
db_password: par défaut vide 
db_name: nom de votre base par exemple 'crud_symfony'
DATABASE_URL='mysql://root:@127.0.0.1:3306/crud_symfony'

#4- création base de données :

php bin/console doctrine:database:create

#5- Création d’entité:

php bin/console make:entity

nom de classe/entite

#6- Migrations: Création des tables / schémas de la base de données

a- php bin/console make:migration 
b- php bin/console doctrine:migrations:migrate 
#7- Création crud

php bin/console make:crud



#8- Exécution du projet

symfony server:start
  /**
     * Affiche la liste de toutes les cities
     * @Route("/cities", name="city_index")
     */
         /**
     * Affiche le détail d'une city
     * @Route("/city/{city}", name="city_show", methods={"GET"}, requirements={"city"="\d+"})
     * @param City $city
     */
       /**
     * Traite la requête d'un formulaire de création de city
     * @Route("/city", name="city_create", methods={"POST"})
     */

    /**
     * Affiche le formulaire d'édition d'une city (GET)
     * Traite le formulaire d'édition d'une city (POST)
     * @Route("/city/{city}/edit", name="city_edit", methods={"GET", "POST"})
     * @param City $city
     */
       /**
     * Supprime une city
     * @Route("/city/{city}", name="city_delete", methods={"DELETE"})
     * @param City $city
     */
       /**
     * @Route("/restaurants/pictures", name="restaurant_picture_index")
     */
      /**
     * @Route("/register", name="app_register")
     */
      /**
     * Affiche la liste de toutes les reviews
     * @Route("/reviews", name="review_index")
     */
      /**
     * @Route("/logout", name="app_logout")
     */
       /**
     * @Route("/login", name="app_login")
     */
