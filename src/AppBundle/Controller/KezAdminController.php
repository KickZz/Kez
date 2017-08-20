<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class KezAdminController extends Controller
{
    /**
     * @Route("/admin", name="tableau_de_bord")
     * @return Response
     * @Method({"GET"})
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Admin:Kez-admin-tableau_de_bord.html.twig');
    }

}