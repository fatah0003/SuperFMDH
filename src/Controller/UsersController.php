<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
class UsersController extends AbstractController
{
    // méthode creation de compte utilisateur
    #[Route(path:"/signup", name:"sign-up")]
    public function signUp(): Response
    {
       return $this->render('security/signup.html.twig');
    }
    // méthode pour se connecter compte utilisateur
    #[Route(path:"/login", name:"log-in")]
    public function logIn(): Response
    {
       return $this->render('security/login.html.twig');
    }
    
}