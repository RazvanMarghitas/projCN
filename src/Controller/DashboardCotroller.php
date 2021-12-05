<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{

    /**
     * @Route("/homepage", name="app_homepage")
     */
    public function index(){
        return $this->render('dashboard/index.html.twig',[
            'user' => $this->getUser()
        ]);
    }
}