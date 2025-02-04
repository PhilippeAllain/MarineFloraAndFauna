<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AnimalController extends AbstractController
{
    #[Route('/animal', name: 'animal.index')]
    public function index(Request $request): Response
    {
      return $this->render('animal/index.html.twig');
    }

    #[Route('/animal/{slug}-{id}', name: 'animal.show', requirements: ['id' => '\d+', 'slug' => '[a-z0-9-]+'])]
    public function show(Request $request, string $slug, int $id): Response
    {
      return new Response('Animal : ' . $slug);
    }
}
