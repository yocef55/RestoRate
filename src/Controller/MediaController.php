<?php

namespace App\Controller;

use App\Entity\Media;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MediaController extends AbstractController
{
    /**
     * @Route("/restaurants/pictures", name="restaurant_picture_index")
     */
    public function index()
    {
        return $this->render('restaurant_picture/index.html.twig', [
            'controller_name' => 'MediaController',
        ]);
    }

    /**
     * Affiche le détail d'une picture
     * @Route("/picture/{picture}", name="picture_show", methods={"GET"}, requirements={"picture"="\d+"})
     * @param Media $picture
     */
    public function show(Media $picture)
    {
    }

    /**
     * Traite la requête d'un formulaire de création de picture
     * @Route("/picture", name="picture_create", methods={"POST"})
     */
    public function create()
    {
    }

    /**
     * Affiche le formulaire d'édition d'une picture (GET)
     * Traite le formulaire d'édition d'une picture (POST)
     * @Route("/picture/{picture}/edit", name="picture_edit", methods={"GET", "POST"})
     * @param Media $picture
     */
    public function edit(Media $picture)
    {
    }

    /**
     * Supprime une picture
     * @Route("/picture/{picture}", name="picture_delete", methods={"DELETE"})
     * @param Media $picture
     */
    public function delete(Media $picture)
    {
    }
}
