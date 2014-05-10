<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\UserBundle\Entity\Reservation;
use MyApp\UserBundle\Entity\Deal;
use MyApp\UserBundle\Entity\User;

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
        $user=$em->getRepository("UserBundle:User")->findOneBy(array('iduser' => '2'));
        $request= $this->container->get('request');
        $deals= $em->getRepository('UserBundle:Deal')->findBy(array("iddeal"=>$iddeal));
        
        $reservationdeal= $em->getRepository('UserBundle:Reservation')->findBy(array("iddeal"=>$iddeal));
        $qte=$request->get('qte');
        if(($deal->getQuantite()-$qte)<0)
        {
            return $this->render('UserBundle:BestDeal:echecreservation.html.twig',array('deals'=>$deals));
        }
        else 
            {
                $reservation = new Reservation();
                $reservation->setIduser($user);
                $reservation->setIddeal($deal);
                $reservation->setDatereservation(date('l \t\h\e jS'));
                $reservation->setQuantite($qte);
                $deal->setQuantite($deal->getQuantite()-$qte);
                $em->persist($reservation);
                $em->flush();
                //return new RedirectResponse($this->get('router')->generate('etudiant_liste'));
                return $this->render('UserBundle:BestDeal:succesreservation.html.twig',array('deals'=>$deals));
            }
        
      
    }
    
}
