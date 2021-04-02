<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Module\GetData;
use App\Module\GetSliderImages;

class HomePageController extends AbstractController 
{   
    public function index()
    {
        $topic = new GetData();
        $imagesSlider = new GetSliderImages();

        $theme = 'Car';
        $topic->setTopic($theme);
        $topic->addData();

        $theme = 'House';
        $topic->setTopic($theme);
        $topic->addData();

        $theme = 'Computer';
        $topic->setTopic($theme);
        $topic->addData();

        return $this->render('homepage.html.twig',[
            'topic' => $topic->getRundData(),
            'imagesSlider' => $imagesSlider->getSliderData()
        ]);
    }

}