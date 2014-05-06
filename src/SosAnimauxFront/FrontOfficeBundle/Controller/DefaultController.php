<?php

namespace SosAnimauxFront\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SosAnimauxFront\FrontOfficeBundle\image;

class DefaultController extends Controller
{
    public function indexAction()
    { $name="ah" ;
        return $this->render('FrontOfficeBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function contactAction()
    { $name="ah";
        return $this->render('FrontOfficeBundle:Default:Contact.html.twig', array('name' => $name));
    }
    
    public function animauxAction()
    { $name="ah";
        return $this->render('FrontOfficeBundle:Default:Animaux.html.twig', array('name' => $name));
    }
    
    public function profilAction()
    { $name="ah";
        return $this->render('FrontOfficeBundle:Default:Profil.html.twig', array('name' => $name));
    }
    
    public function aboutAction()
    { $name="ah";
        return $this->render('FrontOfficeBundle:Default:about.html.twig', array('name' => $name));
    }
    
    public function servicesAction()
    { $name="ah";
        return $this->render('FrontOfficeBundle:Default:Services.html.twig', array('name' => $name));
    }
    
     public function adoptionAction()
    { 
         $conn = mysql_connect("localhost", "root", "") 
  OR DIE (mysql_error()); 
mysql_select_db ("sosanimaux", $conn) OR DIE (mysql_error()); 
$sql    = "SELECT id,photo FROM animal "; 
$result = mysql_query ($sql, $conn); 
$ch='';
 while ( $row = mysql_fetch_array ($result)){
 $ch= 'C:/wamp/www/SosAnimauxBackOffice/web/images/'.$row['id'].".jpg" ;
// echo $ch ;
// echo "<br>";

      //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['photo'] ).'"/>';

      file_put_contents($ch, $row['photo']); 
//      echo "file cree"; echo "<br>" ;
     
      }
         
         
         
         $repository4 = $this->getDoctrine()->getRepository('FrontOfficeBundle:Animal');
    $Animal=$repository4->findAll();
        return $this->render('FrontOfficeBundle:Default:adoption.html.twig', array('Animal' => $Animal));
    }
    
    
    
    public function adopterAction($id)
{   
    $em = $this->getDoctrine()->getManager();
    $etatanimal = $em->getRepository('FrontOfficeBundle:Animal')->find($id);

    if (!$etatanimal) {
        throw $this->createNotFoundException(
            'No etat found for id '.$id
        );
    }

    $etatanimal->setEtat('Adopté');
    $em->flush();

    return $this->redirect($this->generateUrl('adoption'));
}




public function myimageAction()
    { 
    $image=new image();
       
    }

    
    
    
}
