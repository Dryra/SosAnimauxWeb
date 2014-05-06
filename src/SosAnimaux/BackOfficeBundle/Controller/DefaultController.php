<?php

namespace SosAnimaux\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use SosAnimaux\BackOfficeBundle\Controller\src\SosAnimaux\BackOfficeBundle\Entity\Adherant;
use SosAnimauxFront\FrontOfficeBundle\Entity\Adherant;
use Symfony\Component\HttpFoundation\Request;
class DefaultController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('FrontOfficeBundle:Adherant');
        $Adherant=$repository->find(3);
        return $this->render('BackOfficeBundle:Default:index.html.twig', array('name' => $Adherant->getNom(),'firstname'=> $Adherant->getPrenom()));
    }
    
    
    public function dashboardAction(Request $request)
    {   
//Calculer nombre d'adherents
        $em = $this->getDoctrine()->getManager();
$query = $em->createQuery(
    'SELECT count(a.id)
    FROM FrontOfficeBundle:Adherant a
    '
);

$nbadherants = $query->getSingleScalarResult();

//Calculer nombre de prestataires
$query1 = $em->createQuery(
    'SELECT count(p.id)
    FROM FrontOfficeBundle:Prestataire p
    '
);

$nbprestataires = $query1->getSingleScalarResult();

//Calculer nombre d'animaux
$query2 = $em->createQuery(
    'SELECT count(an.id)
    FROM FrontOfficeBundle:Animal an
    '
);

$nbanimaux = $query2->getSingleScalarResult();
        
        
        
        
        $repository = $em->getRepository('FrontOfficeBundle:Adherant');
        $repository2 = $em->getRepository('FrontOfficeBundle:Admin');
        $repository3 = $em->getRepository('FrontOfficeBundle:Prestataire');
        $repository4 = $em->getRepository('FrontOfficeBundle:Animal');
        
        $Adherant=$repository->findAll();
        $Admin=$repository2->findAll();
        $Prestataire=$repository3->findAll();
        $Animal=$repository4->findAll();
        
        
       
       $Adherants= new Adherant() ;
       
       
       
        $Adherants->setPhotourl("http://i.imgur.com/h0zJWYc.jpg");
        $Adherants->setEtat(1);

        
        $form = $this->createFormBuilder($Adherants)
                ->add('nom', 'text')
                ->add('prenom', 'text')
                ->add('email', 'text')
                ->add('mdp','password')
                ->add('Envoyer', 'submit')
                ->getForm();
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em->persist($Adherants);
                $em->flush();
                
            }
        }
       
        
        
        
        
        
        
        
        
        
        
        return $this->render('BackOfficeBundle:Default:Dashboard.html.twig', array('Adherant'=>$Adherant,'Admin'=>$Admin,'Prestataire'=>$Prestataire,'nbadherants'=>$nbadherants,'nbprestataires'=>$nbprestataires,'nbanimaux'=>$nbanimaux,'Animal'=>$Animal,'form' => $form->createView()));
    }
    
    public function profilAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('FrontOfficeBundle:Adherant');
        $Adherant=$repository->find($id);
        return $this->render('BackOfficeBundle:Default:profil.html.twig', array('Adherant' => $Adherant));
    }
    
    
    public function utilisateursAction(Request $request)
    {
       //Calculer nombre d'adherents
        $em = $this->getDoctrine()->getManager();
$query = $em->createQuery(
    'SELECT count(a.id)
    FROM FrontOfficeBundle:Adherant a
    '
);

$nbadherants = $query->getSingleScalarResult();

//Calculer nombre de prestataires
$query1 = $em->createQuery(
    'SELECT count(p.id)
    FROM FrontOfficeBundle:Prestataire p
    '
);

$nbprestataires = $query1->getSingleScalarResult();

//Calculer nombre d'animaux
$query2 = $em->createQuery(
    'SELECT count(an.id)
    FROM FrontOfficeBundle:Animal an
    '
);

$nbanimaux = $query2->getSingleScalarResult();
        
        
        
        
        $repository = $em->getRepository('FrontOfficeBundle:Adherant');
        $repository2 = $em->getRepository('FrontOfficeBundle:Admin');
        $repository3 = $em->getRepository('FrontOfficeBundle:Prestataire');
        $repository4 = $em->getRepository('FrontOfficeBundle:Animal');
        
        $Adherant=$repository->findAll();
        $Admin=$repository2->findAll();
        $Prestataire=$repository3->findAll();
        $Animal=$repository4->findAll();
        
        
       
       $Adherants= new Adherant() ;
       
       
        $Adherants->setPhotourl("http://i.imgur.com/h0zJWYc.jpg");
        $Adherants->setEtat(1);

        
        $form = $this->createFormBuilder($Adherants)
                ->add('nom', 'text')
                ->add('prenom', 'text')
                ->add('email', 'text')
                ->add('mdp','password')
                ->add('Envoyer', 'submit')
                ->getForm();
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em->persist($Adherants);
                $em->flush();
                
            }
        }
       
        
        
        
        
        
        
        
        
        
        
        return $this->render('BackOfficeBundle:Default:utilisateurs.html.twig', array('Adherant'=>$Adherant,'Admin'=>$Admin,'Prestataire'=>$Prestataire,'nbadherants'=>$nbadherants,'nbprestataires'=>$nbprestataires,'nbanimaux'=>$nbanimaux,'Animal'=>$Animal,'form' => $form->createView()));
    
    }
    
    
    


    
    
    
    
    
    
   
    
    
    
    
    public function bloquerAction($id)
{   $adherants = new Adherant() ;
    $em = $this->getDoctrine()->getManager();
    $etat = $em->getRepository('FrontOfficeBundle:Adherant')->find($id);

    if (!$etat) {
        throw $this->createNotFoundException(
            'No etat found for id '.$id
        );
    }

    $etat->setEtat(0);
    $em->flush();

    return $this->redirect($this->generateUrl('utilisateurs'));
}

    public function debloquerAction($id)
{   $adherants = new Adherant() ;
    $em = $this->getDoctrine()->getManager();
    $etat = $em->getRepository('FrontOfficeBundle:Adherant')->find($id);

    if (!$etat) {
        throw $this->createNotFoundException(
            'No etat found for id '.$id
        );
    }

    $etat->setEtat(1);
    $em->flush();

    return $this->redirect($this->generateUrl('utilisateurs'));
}
    
    
    
    
}
