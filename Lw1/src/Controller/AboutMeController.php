<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Modules\AboutMe\App\HobbyService;
use App\View\AboutMe\AboutMePageView;

class AboutMeController extends AbstractController
{
    /**
     * @Route
     */
    public function homepage(HobbyService $hs): Response
    {
        $view = new AboutMePageView($hs->getHobbies());   
        return $this->render('pages/aboutme.html.twig', $view->buildParams());
    }
}