<?php

/*
 * *
 * Pricemania registration test project.
 *
 * @author Matej Kuna <mat.kuna@gmail.com>
 */

namespace Pricemania\Bundle\RegistrationBundle\Controller;

use Pricemania\Bundle\RegistrationBundle\Entity\User;
use Pricemania\Bundle\RegistrationBundle\Form\Type\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends Controller
{
    public function newAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        dump($form);

        return $this->render('PricemaniaRegistrationBundle:Registration:register.html.twig');
    }

    public function completedAction()
    {
        return $this->render('PricemaniaRegistrationBundle:Registration:completed.html.twig');
    }
}
