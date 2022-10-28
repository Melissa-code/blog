<?php


namespace App\Controller;


use phpDocumentor\Reflection\Types\True_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/articles", name="articles")
     */
    public function articles()
    {
        // Simulation recuperation depuis la DB SELECT * FROM Articles;
        $articles = [
            1 => [
                "id"=> 1,
                "title"=>"Article 1: Buddha en Chine",
                "content"=>"Grand Buddha de Leshan",
                "image"=> "https://media.routard.com/image/32/8/photo.1489328.jpg",
                "isPublished"=> true
            ],
            2 => [
                "id"=> 2,
                "title"=>"Article 2: Buddha au Japon",
                "content"=>"Grand Buddha de Ushiku",
                "image"=> "https://www.kanpai.fr/sites/default/files/uploads/2014/03/ushiku-bouddha-2.jpg",
                "isPublished"=> false
            ],
            3 => [
                "id"=> 3,
                "title"=>"Article 3: Buddha en Thaïlande",
                "content"=>"Grand Buddha de Bangkok",
                "image"=> "https://img1.artprintcafe.com/23497-large_default/pangea-images-en-priere-devant-le-bouddha-wat-pho-bangkok-thailande.jpg",
                "isPublished"=> true
            ]
        ];
        return $this->render("articles.html.twig", [
            'articles' => $articles
        ]);
    }

    /**
     * @Route("article/{id}", name="article")
     */
    public function article($id)
    {

        $articles = [
            1 => [
                "id"=> 1,
                "title"=>"Article 1: Buddha en Chine",
                "content"=>"Grand Buddha de Leshan",
                "image"=> "https://media.routard.com/image/32/8/photo.1489328.jpg",
                "isPublished"=> true
            ],
            2 => [
                "id"=> 2,
                "title"=>"Article 2: Buddha au Japon",
                "content"=>"Grand Buddha de Ushiku",
                "image"=> "https://www.kanpai.fr/sites/default/files/uploads/2014/03/ushiku-bouddha-2.jpg",
                "isPublished"=> false
            ],
            3 => [
                "id"=> 3,
                "title"=>"Article 3: Buddha en Thaïlande",
                "content"=>"Grand Buddha de Bangkok",
                "image"=> "https://img1.artprintcafe.com/23497-large_default/pangea-images-en-priere-devant-le-bouddha-wat-pho-bangkok-thailande.jpg",
                "isPublished"=> true
            ]
        ];

        return $this->render("article.html.twig", [
            'article' => $articles[$id] //id passé dans l'URL
        ]);
    }


}