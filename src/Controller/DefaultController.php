<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductDetailsRepository;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'homepage', methods: ['GET'])]
    public function index(ProductDetailsRepository $productDetailsRepository): Response
    {
     /*   $template = 'default/index.html.twig';
        $args = [];
        return $this->render($template, $args);*/

        return $this->render('default/index.html.twig', [
            'productDetailss' => $productDetailsRepository->findAll(),
        ]);
    }




    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        $template = 'default/contact.html.twig';
        $args = [];
        return $this->render($template, $args);
    }
    #[Route('/shoppingCart', name: 'shoppingCart')]
    public function shoppingCart(): Response
    {
        $template = 'default/shoppingCart.html.twig';
        $args = [];
        return $this->render($template, $args);
    }


}
