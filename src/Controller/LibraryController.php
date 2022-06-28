<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\{JsonResponse, Request};
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController
{

    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @Route("/library/list", name="library_list")
     */
    public function list(Request $request)
    {

        $this->logger->info('Llamando listado');

        $reponse = new JsonResponse();
        $reponse->setData([
            'sucess' => true,
            'data' => [
                [
                    'id' => 1,
                    'titulo' => 'Don Quijote de La Mancha',
                    'autor' => 'Miguel de Cervantes'
                ],
                [
                    'id' => 2,
                    'titulo' => 'Más allá del Bien y el Mal',
                    'autor' => 'Friedrich Nietzsche'
                ]
            ]
        ]);
        return $reponse;
    }
}
