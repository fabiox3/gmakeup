<?php
// src/AppBundle/Controller/ContattiController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContattiController extends Controller
{
    /**
     * @Route("/contatti", name="contatti")
     */
    public function indexAction(Request $request)
    {
        return $this->render('contatti/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}