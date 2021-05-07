<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AboutMeController extends AbstractController
{
    /**
     * @Route
     */
    public function homepage()
    {
        return $this->render('/Pages/AboutMe.html.twig');
    }
}