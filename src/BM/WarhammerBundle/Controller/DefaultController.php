<?php

namespace BM\WarhammerBundle\Controller;

use BM\WarhammerBundle\Entity\Figurine;
use BM\WarhammerBundle\Form\FigurineType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function viewFigurineAction($id)
    {

        $figurine = $this->getDoctrine()
            ->getRepository(Figurine::class)
            ->find($id);

        if (!$figurine) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        return $this->render('@BMWarhammer/ViewFigurine.html.twig',['figurine'=>$figurine]);
    }
}
