<?php

namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/admin', name:'admin_')]
class MainController extends AbstractController{

    #[Route(path:'/', name:'index')]
    public function index(): Response{
        return $this->render('admin/index.html.twig');

    }

}