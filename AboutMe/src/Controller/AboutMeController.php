<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\View\AboutMe\AboutMePageView;
use App\Modules\AboutMe\App\HobbieService;

class AboutMeController extends AbstractController
{
    private $hobbies;
    private $aboutMePageView;

    public function __construct(HobbieService $hobbieService)
    {
        $this->hobbies = $hobbieService->getHobbies();
    }

    public function aboutMePage()
    {
        $this->aboutMePageView = new AboutMePageView();

        return $this->render('about_me/about_me.html.twig', [
            'array' => $this->aboutMePageView->buildParams($this->hobbies),
        ]);
    }

    public function update(HobbieService $update)
    {
        $update->update();
        $this->aboutMePage();
    }
}