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
                "image"=> "https://images.unsplash.com/photo-1558980971-97f50d0fed00?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YnVkZGhhfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=900&q=60",
                "isPublished"=> true
            ],
            2 => [
                "id"=> 2,
                "title"=>"Article 2: Buddha au Japon",
                "content"=>"Grand Buddha de Ushiku",
                "image"=> "https://plus.unsplash.com/premium_photo-1661963584437-c3dea0e82a49?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YnVkZGhhfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=900&q=60",
                "isPublished"=> false
            ],
            3 => [
                "id"=> 3,
                "title"=>"Article 3: Buddha en Thaïlande",
                "content"=>"Grand Buddha de Bangkok",
                "image"=> "https://images.unsplash.com/photo-1537903904737-13fc83b81be0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGJ1ZGRoYXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=900&q=60",
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