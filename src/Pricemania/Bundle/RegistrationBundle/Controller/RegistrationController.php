<?php

/*
 * *
 * Pricemania registration test project.
 *
 * @author Matej Kuna <mat.kuna@gmail.com>
 */

/**
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

        $form->handleRequest($request);
        if ($form->isValid()) {
            $user = $form->getData();
            $this->storeUser($user);

            return $this->successRegistrationRedirect();
        }

        return $this->render('PricemaniaRegistrationBundle:Registration:register.html.twig',
                             array(
                                 'registration_form' => $form->createView(),
                             ));
    }

    public function completedAction()
    {
        return $this->render('PricemaniaRegistrationBundle:Registration:completed.html.twig');
    }

    /**
     * @param User $user
     *
     * @return int
     */
    private function storeUser($user)
    {
        $user->setPassword('password');

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return $user->getUserId();
    }

    private function successRegistrationRedirect()
    {
        $this->addFlash(
            'success',
            'Ta-daaaa! You did it.'
        );

        return $this->redirectToRoute('pricemania_registration_completed');
    }
}
