<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $activities = [
            [
                'title' => 'Campagne de sensibilisation sur le VIH/SIDA',
                'description' => 'Sensibilisation des communautés sur la prévention et la prise en charge du VIH/SIDA.',
                'location' => 'Uvira',
                'date' => '15-20 Juin 2025',
                'image' => 'health.jpg'
            ],
            [
                'title' => 'Formation en agriculture moderne',
                'description' => 'Formation des agriculteurs locaux sur les techniques agricoles modernes et durables.',
                'location' => 'Fizi',
                'date' => '1-5 Juillet 2025',
                'image' => 'agriculture.jpg'
            ],
            [
                'title' => 'Atelier sur les droits humains',
                'description' => 'Sensibilisation des jeunes sur leurs droits fondamentaux et les mécanismes de protection.',
                'location' => 'Baraka',
                'date' => '10-12 Août 2025',
                'image' => 'rights.jpg'
            ]
        ];

        return $this->render('home/index.html.twig', [
            'activities' => $activities,
        ]);
    }
}
