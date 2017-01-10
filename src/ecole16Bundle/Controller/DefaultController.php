<?php

namespace ecole16Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Default/ecole16Bundle/index.html.twig');
    }
}
