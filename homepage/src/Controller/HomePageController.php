<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController 
{
    /**
     * @Route("/homepage")
     */
    public function index()
    {                             

        return $this->render('homepage.html.twig');
    }
}