<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/article/{id}", name="article", requirements={"id"="\d+"})
     */
    public function article(int $id)
    {

        $articles = [
            1=>[
                "title" => "Article 1",
                "content" => "Contenu de l'article 1",
                "id" => 1
            ],
            2=>[
                "title" => "Article 2",
                "content" => "Contenu de l'article 2",
                "id" => 2
            ],
            3=>[
                "title" => "Article 3",
                "content" => "Contenu de l'article 3",
                "id" => 3
            ],
        ];

        // Récupérer la valeur du paramètre GET id dans l url
        //$request = Request::createFromGlobals();
        //$id = $request->query->get('id');

        // vérifier que l'id axiste dans le tableau avant affichage
        if(!array_key_exists($id, $articles)){
            return new Response("L'article n'existe pas.", 404);
        }

        // changer id dans l url pour ne pas avoir article?id=1 --> article/1--> dans la route article/{id}

        $article = $articles[$id];

        // renvoyer une réponse qui retourne le contenu de l'article trouvé
        return new Response($article['title']);

    }
}