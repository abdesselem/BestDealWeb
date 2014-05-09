<?php

namespace Admin\AdminBundle\Controller;
use \Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\UserBundle\Entity\User;
use MyApp\UserBundle\Entity\Deal;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {  $em= $this->getDoctrine()->getManager();
        $prest=$em->getRepository("UserBundle:User")->findBy(array('statut' => '0'));
        $deal=$em->getRepository("UserBundle:Deal")->findBy(array('statut' => '0'));
        
        return $this->render('AdminAdminBundle:Default:index.html.twig',array("deals"=>$deal,"prests"=>$prest));
    }
    public function morrisAction()
    {
        return $this->render('AdminAdminBundle:Default:morris.html.twig');
    }
    public function flotAction()
    {
        return $this->render('AdminAdminBundle:Default:flot.html.twig');
    }
     public function clientAction()
    {   
       $em= $this->getDoctrine()->getManager();
        $client=$em->getRepository("UserBundle:User")->findBy(array('role' => 'client'));
        return $this->render("AdminAdminBundle:Default:client.html.twig",array("clients"=>$client));
    }
    
    public function prestataireAction()
    {
       $em= $this->getDoctrine()->getManager();
        $prest=$em->getRepository("UserBundle:User")->findBy(array('role' => 'prest','statut' => '1'));
        return $this->render("AdminAdminBundle:Default:prestataire.html.twig",array("prests"=>$prest));
    }
    
     public function prest_a_ValiderAction()
    {
       $em= $this->getDoctrine()->getManager();
        $prest=$em->getRepository("UserBundle:User")->findBy(array('statut' => '0'));
        return $this->render("AdminAdminBundle:Default:prest_a_Valider.html.twig",array("prests"=>$prest));
    }
    
    
    public function dealAction()
    {
       $em= $this->getDoctrine()->getManager();
        $deal=$em->getRepository("UserBundle:Deal")->findBy(array('statut' => '1'));
        return $this->render("AdminAdminBundle:Default:deal.html.twig",array("deals"=>$deal));
    }
    public function deal_a_ValiderAction()
    {
       $em= $this->getDoctrine()->getManager();
        $deal=$em->getRepository("UserBundle:Deal")->findBy(array('statut' => '0'));
        return $this->render("AdminAdminBundle:Default:deal_a_Valider.html.twig",array("deals"=>$deal));
    }
    
    
    public function supprimerCAction($id){
           $em= $this->getDoctrine()->getManager();
           $client=$em->getRepository("UserBundle:User")->findOneBy(array('iduser' => $id));
           $em->remove($client);
           $em->flush();
           
         return new RedirectResponse($this->get('router')->generate('admin_admin_client'));
    }
    
    public function supprimerPAction($id){
           $em= $this->getDoctrine()->getManager();
           $prest=$em->getRepository("UserBundle:User")->findOneBy(array('iduser' => $id));
           $em->remove($prest);
           $em->flush();
           
         return new RedirectResponse($this->get('router')->generate('admin_admin_prest'));
    }
    
    public function supprimerDAction($id){
           $em= $this->getDoctrine()->getManager();
           $deal=$em->getRepository("UserBundle:Deal")->findOneBy(array('iddeal' => $id));
           $em->remove($deal);
           $em->flush();
           
         return new RedirectResponse($this->get('router')->generate('admin_admin_deal'));
    }
    
    public function ValiderDAction($id){
           $em= $this->getDoctrine()->getManager();
           $deal=$em->getRepository("UserBundle:Deal")->findOneBy(array('iddeal' => $id));
           if (!$deal) {
        throw $this->createNotFoundException(
            'Aucun deal trouvé pour cet id : '.$id
        );
    }
           $deal->setStatut('1');
           $em->flush();
           
         return new RedirectResponse($this->get('router')->generate('admin_admin_deal_a_Valider'));
    }
    
    public function ValiderPAction($id){
           $em= $this->getDoctrine()->getManager();
           $prest=$em->getRepository("UserBundle:User")->findOneBy(array('iduser' => $id));
           if (!$prest) {
        throw $this->createNotFoundException(
            'Aucun prestataire trouvé pour cet id : '.$id
        );
    }
           $prest->setStatut('1');
           $em->flush();
           
         return new RedirectResponse($this->get('router')->generate('admin_admin_prest_a_Valider'));
    }
    
    public function rechercherAction(Request $request){
        $searchQuery = $this->get('request')->request->get('recherche');
        $em= $this->getDoctrine()->getManager();
        $recherche=$em->getRepository("UserBundle:User")->findBy(array('nom' => $searchQuery));
        return $this->render("AdminAdminBundle:Default:recherche.html.twig",array("recherches"=>$recherche));
        
    }
    
    public function rechercherPAction(Request $request){
        $searchQuery = $this->get('request')->request->get('recherche');
        $em= $this->getDoctrine()->getManager();
        $recherche=$em->getRepository("UserBundle:User")->findBy(array('nom' => $searchQuery,'statut' =>'1'));
        return $this->render("AdminAdminBundle:Default:rechercheP.html.twig",array("recherches"=>$recherche));
        
    }
    
     public function rechercherDAction(Request $request){
        $searchQuery = $this->get('request')->request->get('recherche');
        $em= $this->getDoctrine()->getManager();
        $recherche=$em->getRepository("UserBundle:Deal")->findBy(array('libelle' => $searchQuery,'statut' =>'1'));
        return $this->render("AdminAdminBundle:Default:rechercheD.html.twig",array("recherches"=>$recherche));
        
    }
    
    public function rechercher_prenomAction(Request $request){
        $searchQuery = $this->get('request')->request->get('recherche');
        $em= $this->getDoctrine()->getManager();
        $recherche=$em->getRepository("UserBundle:User")->findBy(array('prenom' => $searchQuery));
        return $this->render("AdminAdminBundle:Default:recherche.html.twig",array("recherches"=>$recherche));
        
    }
    
     public function rechercherD_catAction(Request $request){
        $searchQuery = $this->get('request')->request->get('recherche');
        $em= $this->getDoctrine()->getManager();
        $recherche=$em->getRepository("UserBundle:Deal")->findBy(array('categorie' => $searchQuery,'statut' =>'1'));
        return $this->render("AdminAdminBundle:Default:rechercheD.html.twig",array("recherches"=>$recherche));
        
    }
}
