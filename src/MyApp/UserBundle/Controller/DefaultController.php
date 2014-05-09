<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UserBundle:BestDeal:index.html.twig');
    }
    
    
    
    public function contactAction()
    {
        return $this->render('UserBundle:BestDeal:contact.html.twig');
    }
    
     public function rechercheAction()
    {
         $em= $this->getDoctrine()->getManager();
        
        $request= $this->container->get('request');
        
        $nom=$request->get('nom');
        $type=$request->get('type');
        $cat=$request->get('cat');
        $ndeals=$em->getRepository('UserBundle:Deal')->findBy(array("libelle"=>$nom));
        $tdeals=$em->getRepository('UserBundle:Deal')->findBy(array("typedeal"=>$type));
        $cdeals=$em->getRepository('UserBundle:Deal')->findBy(array("categorie"=>$cat));
        $deals= array_merge($ndeals, $tdeals, $cdeals);
       

        return $this->render('UserBundle:BestDeal:rechercheliste.html.twig', array('deals'=>$deals));
    }
    
     public function connexionAction()
    {
        return $this->render('UserBundle:BestDeal:connexion.html.twig');
    }
    
     public function aboutAction()
    {
        return $this->render('UserBundle:BestDeal:about.html.twig');
    }
    
}
