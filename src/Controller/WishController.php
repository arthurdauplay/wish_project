<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WishController extends AbstractController
{
    /**
     * @Route("/wish", name="app_wish")
     */
    public function wish(): Response
    {
        return $this->render('wish/index.html.twig');
    }

    /**
     * @Route("/wish/show/{id}", name="app_wish_show")
     */
    public function wishShow($id): Response
    {
        return $this->render('wish/show.html.twig');
    }
}
