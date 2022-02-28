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
