<?php

namespace Fnf\FunBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FnfFunBundle:Default:index.html.twig');
    }
}
