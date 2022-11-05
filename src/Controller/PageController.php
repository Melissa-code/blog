<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{

    // Créer une nouvelle page d accueil- Créer une méthode--> renvoyer instance de classe Response

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        $message = "A la découverte des Buddhas";

        return $this->render("home.html.twig", [
            "message" => $message
        ]);
    }




    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return new Response("Bienvenue sur la page contact ! ");
    }

    /**
     * @Route("/poker", name="poker")
     */
    public function poker()
    {
        $request = Request::createFromGlobals();
        //dump($request); die;
        $age = $request->query->get('age');

        if ($age < 18) {
            return $this->redirectToRoute('digimon');
            //return new Response("Mineur");
        }

        return new Response("Bienvenue sur la page poker");
    }


    /**
     * @Route("/digimon", name="digimon")
     */
    public function digimon()
    {
        return new Response("Les digimons sont là !");
    }

}