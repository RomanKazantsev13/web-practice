<?php

namespace App\Modules\AboutMe\Infrastructure;

use App\Modules\AboutMe\App\ImageProviderInterface;
use App\Modules\AboutMe\Model\Image;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectRepository;


class ImageRepository
{
    private EntityManagerInterface $manager;
    private ObjectRepository $repository;

    public function __construct(EntityManagerInterface $manager) 
    {
        $this->manager = $manager; // Он отвечает за сохранение в базу данных, и получение объектов из базы данных.
        $this->repository = $this->manager->getRepository(Image::class);
    }

    public function addImage(Image $image) 
    { // черезе менеджер
        $this->manager->persist($image);  // управление обьектом
        $this->manager->flush();          // 
    }

    public function deleteImage(Image $image) 
    { // через менеджер
        $this->manager->remove($image);
        $this->manager->flush();
    }

    public function getImagesByTopic(string $topic) 
    {
        $images = $this->repository->findBy([
            'keyword' => $topic
        ]);

        return $images;
    }

    public function update(string $topic, array $newImages) // deleteImage() + addImage() + getImagesByTopic()
    {
        // удалить надо все картинки! а не одну
        foreach ($this->getImagesByTopic($topic) as $image)
        {
            $this->deleteImage($image);
        }

        // добавить надо все картинки! а не одну
        foreach ($newImages as $image) 
        {
            $this->addImage($image);
        }
    }
}