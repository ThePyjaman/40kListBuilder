<?php

namespace BM\WarhammerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BMWarhammerBundle:Default:index.html.twig');
    }
}
