<?php
// src/AppBundle/Controller/ModalController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ModalController extends Controller
{
    /**
     * @Route("/modal/test", name="modal-test")
     */
    public function indexAction(Request $request)
    {
        return $this->render('modal/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}