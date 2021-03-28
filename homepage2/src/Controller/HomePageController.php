<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Module\GetData;

class HomePageController extends AbstractController 
{   
    public function index()
    {
        $topic = new GetData(); //использовать функции из класса GetData только для переменной topic

        $theme = 'Город';
        $topic->setTopic($theme); 

        return $this->render('base.html.twig',[
            'images' => $topic->getImages()
        ]);
    }

}