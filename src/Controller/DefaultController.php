<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController {

    #[Route(path:"/home", name:"home")]
    public function showHomepage(): Response
    {
        return $this->render('base.html.twig');
    }

}