<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
class ListingsController extends AbstractController
{
    // méthode ajout d'une annonce
    #[Route(path:"/listing/new", name:"add-listing")]
    public function addListing(): Response
    {
       return $this->render('listings/add-listing.html.twig');
    }

    //méthode suppression d'une annonce
    #[Route(path:"/listing/delete", name:"delete-listing")]
    public function deleteListing(): Response
    {
       return $this->render('listings/delete-listing.html.twig');
    }
    
    //méthode modification d'une annonce
    #[Route(path:"/listing/update", name:"update-listing")]
    public function updateListing(): Response
    {
       return $this->render('listings/update-listing.html.twig');
    }
}