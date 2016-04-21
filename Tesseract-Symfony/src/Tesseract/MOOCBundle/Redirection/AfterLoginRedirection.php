<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tesseract\MOOCBundle\Redirection;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
/**
 * Description of AfterLoginRedirection
 *
 * @author haikal
 */
class AfterLoginRedirection implements AuthenticationSuccessHandlerInterface {

    /**
     * @var \Symfony\Component\Routing\RouterInterface
     */
    private $router;

    /**
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router) {
        $this->router = $router;
    }

    /**
     * @param Request $request
     * @param TokenInterface $token
     * @return RedirectResponse
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token) {
        // Get list of roles for current user
        $roles = $token->getRoles();
        // Tranform this list in array
        $rolesTab = array_map(function($role) {
            return $role->getRole();
        }, $roles);
        // If is a admin or super admin we redirect to the backoffice area
//        if (in_array('ROLE_USER', $rolesTab, true) || in_array('ROLE_SUPER_ADMIN', $rolesTab, true))
//            $redirection = new RedirectResponse($this->router->generate('backoffice_homepage'));
//        // otherwise, if is a commercial user we redirect to the crm area
//        else
        if (in_array('ROLE_APR', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('tesseract_mooc_apprenant_interface'));
        // otherwise we redirect user to the member area
        if (in_array('ROLE_SUPER_ADMIN', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('tesseract_mooc_admin_dashboard'));


        return $redirection;
    }

}
