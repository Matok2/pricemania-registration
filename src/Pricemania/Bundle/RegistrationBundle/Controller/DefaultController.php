<?php

namespace Pricemania\Bundle\RegistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PricemaniaRegistrationBundle:Default:index.html.twig');
    }
}
