<?php

// src/MehdiBundle/Controller/ArticleController.php

namespace MehdiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MehdiBundle:Article:list.html.twig', array('name' => $name));
    }
}
