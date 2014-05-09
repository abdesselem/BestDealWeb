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
    
    public function dareserverAction($iddeal)
    {
        $em= $this->getDoctrine()->getManager();
          
        $deal= $em->getRepository('UserBundle:Deal')->findBy(array("iddeal"=>$iddeal));
        $reservation= $em->getRepository('UserBundle:Reservation')->findBy(array("iddeal"=>$iddeal));
        
        return $this->render('UserBundle:BestDeal:dareserver.html.twig',array('deals'=>$deal));
    }
    
    
     public function reserverAction($iddeal)
    {
        $em= $this->getDoctrine()->getManager();
        $deal=$em->getRepository("UserBundle:Deal")->findOneBy(array('iddeal' => $iddeal));
        $request= $this->container->get('request');
        $deals= $em->getRepository('UserBundle:Deal')->findBy(array("iddeal"=>$iddeal));
        $reservation= $em->getRepository('UserBundle:Reservation')->findBy(array("iddeal"=>$iddeal));
        $qte=$request->get('qte');
        if(($deal->getQuantite()-$qte)<0)
        {
            return $this->render('UserBundle:BestDeal:echecreservation.html.twig',array('deals'=>$deals));
        }
        else 
            {
                return $this->render('UserBundle:BestDeal:succesreservation.html.twig',array('deals'=>$deals));
            }
        
      
    }
    
}
