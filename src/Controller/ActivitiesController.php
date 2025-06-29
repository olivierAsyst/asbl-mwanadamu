<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ActivitiesController extends AbstractController
{
    #[Route('/activites', name: 'activities')]
    public function index(): Response
    {
        $activities = [
            [
                'title' => 'Campagne de sensibilisation sur le VIH/SIDA',
                'description' => 'Organisation de séances de sensibilisation dans les écoles et les communautés sur les modes de transmission, de prévention et de prise en charge du VIH/SIDA. Distribution de matériel éducatif et de préservatifs.',
                'location' => 'Uvira',
                'date' => '15-20 Juin 2025',
                'image' => 'health.jpg',
                'objectives' => ['Santé pour tous', 'Protection des personnes atteintes du VIH/SIDA']
            ],
            [
                'title' => 'Formation en agriculture moderne',
                'description' => 'Formation des agriculteurs locaux sur les techniques agricoles modernes, la rotation des cultures, l\'utilisation rationnelle des engrais et la gestion durable des terres. Distribution de semences améliorées.',
                'location' => 'Fizi',
                'date' => '1-5 Juillet 2025',
                'image' => 'agriculture.jpg',
                'objectives' => ['Protection de l\'environnement', 'Promotion de l\'agriculture moderne']
            ],
            [
                'title' => 'Atelier sur les droits humains',
                'description' => 'Série d\'ateliers éducatifs pour les jeunes sur leurs droits fondamentaux, les mécanismes de protection et les voies de recours en cas de violation. Collaboration avec les autorités locales.',
                'location' => 'Baraka',
                'date' => '10-12 Août 2025',
                'image' => 'rights.jpg',
                'objectives' => ['Droit à l\'information', 'Protection contre les violences']
            ],
            [
                'title' => 'Programme d\'hygiène publique',
                'description' => 'Installation de points d\'eau potable et de stations de lavage des mains dans les lieux publics. Campagne de sensibilisation sur les bonnes pratiques d\'hygiène.',
                'location' => 'Bukavu',
                'date' => '5-15 Septembre 2025',
                'image' => 'hygiene.jpg',
                'objectives' => ['Promotion de l\'hygiène publique', 'Santé pour tous']
            ],
            [
                'title' => 'Soutien aux victimes de violence',
                'description' => 'Mise en place d\'un centre d\'écoute et d\'orientation pour les victimes de violence. Assistance psychosociale et juridique. Plaidoyer pour la protection des droits des victimes.',
                'location' => 'Uvira',
                'date' => 'En cours',
                'image' => 'support.jpg',
                'objectives' => ['Protection des victimes', 'Lutte contre les discriminations']
            ],
            [
                'title' => 'Projet de reboisement',
                'description' => 'Campagne de plantation d\'arbres dans les zones déboisées. Sensibilisation des communautés sur l\'importance des forêts et la lutte contre le changement climatique.',
                'location' => 'Haut-Plateaux',
                'date' => 'Octobre 2025',
                'image' => 'environment.jpg',
                'objectives' => ['Protection de l\'environnement', 'Développement durable']
            ]
        ];

        return $this->render('activities/index.html.twig', [
            'activities' => $activities,
        ]);
    }
}
