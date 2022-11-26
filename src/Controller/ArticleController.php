<?php


namespace App\Controller;


use App\Repository\ArticleRepository;
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
    public function articles(ArticleRepository $articleRepository)
    {
        $articles = $articleRepository->findAll();

        return $this->render("articles.html.twig", [
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/article/{id}", name="article")
     */
    public function article($id, ArticleRepository $articleRepository)
    {

    $article = $articleRepository->find($id);

        return $this->render("article.html.twig", [
            'article' => $article
        ]);
    }

    /**
     * @Route("/searchArticles", name="search")
     */
    public function searchArticles(Request $request)
    {
        # récupération de la saisie utilisateur dans url
        $search = $request->query->get("search");

        # redirection vers une autre page avec le parametre $search renseigné
        return $this->redirectToRoute("search_articles", [
            'search' => $search
        ]);
    }

    /**
     * @Route("/searchArticles/{search}", name="search_articles")
     */
    public function results($search, ArticleRepository $articleRepository)
    {
        $articles = $articleRepository->searchArticle($search);

        return $this->render("search_articles.html.twig", [
            'articles' => $articles
        ]);
    }



}