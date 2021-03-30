<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Module\GetData;

class HomePageController extends AbstractController 
{   
    public function index()
    {
        $topic = new GetData();

        $theme = 'Car';
        $topic->setTopic($theme);
        $topic->addData();

        $theme = 'House';
        $topic->setTopic($theme);
        $topic->addData();

        $theme = 'Computer';
        $topic->setTopic($theme);
        $topic->addData();

        return $this->render('base.html.twig',[
            'topic' => $topic-> getData()
        ]);
    }

}