<?php
// src/AppBundle/Controller/ServiziController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ServiziController extends Controller
{
    /**
     * @Route("/servizi", name="servizi")
     */
    public function indexAction(Request $request)
    {
        return $this->render('servizi/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}