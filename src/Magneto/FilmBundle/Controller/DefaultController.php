<?php

namespace Magneto\FilmBundle\Controller;

use Magneto\FilmBundle\Entity\Film;
use Magneto\FilmBundle\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($id)
    {
    	$film = new Film();
    	$film->setTitre("Titre du film");
    	$film->setSynopsis("Synopsis du film");
    	$film->setDatePublication(new \DateTime());

    	$image = new Image();
    	$image->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
    	$image->setAlt('Job de rêve');

    	$film->setImage($image);

    	$em = $this->getDoctrine()->getManager();

    	$em->persist($film);

    	$em->flush();

        return $this->render('MagnetoFilmBundle:Default:index.html.twig', array('name' => "Theo"));
    }
}
