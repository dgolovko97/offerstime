<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class FirstController extends AbstractController
{
    /**
     * @Route("/first")
     */
    public function number()
    {
        $number = random_int(0,100);
        return $this->render('/first/number.html.twig',[
            'number' => $number
        ]);

    }
}