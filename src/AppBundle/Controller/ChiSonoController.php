<?php
// src/AppBundle/Controller/ChiSonoController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ChiSonoController extends Controller
{
    /**
     * @Route("/chi-sono", name="chisono")
     */
    public function indexAction(Request $request)
    {
        return $this->render('chisono/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}