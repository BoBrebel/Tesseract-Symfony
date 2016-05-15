<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tesseract\MOOCBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tesseract\MOOCBundle\Entity\Epreuve;
/**
 * Description of CoachController
 *
 * @author Bacem
 */
class CoachController extends Controller{
    public function indexAction() {
        
        $em = $this->getDoctrine()->getManager();
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' =>$this->getUser()->getId(),
                                                                                           'vue'=>'non' ));
        $nbr=count($notifications);
        $invites = $em->getRepository("TesseractMOOCBundle:Invitations")->findBy(array('idUtilisateur'=>$this->getUser()->getId(), 'sens'=>'F', 'etat'=>'ATT', 'idOrganisme'=>0));
        $invite = 0;
        $invite = count($invites);
        return $this->render('TesseractMOOCBundle:Formateur:CoachDashboard.html.twig',array('notifications'=>$notifications,
                                                                                            'nbrnot'=>$nbr, 
                                                                                            'committeeInvite'=>$invite));
    }
    
    public function displayCourseAction() {
        $em = $this->getDoctrine()->getManager();
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' =>$this->getUser()->getId(),
                                                                                                'vue'=>'non' ));
        $nbr=count($notifications);
        return $this->render('TesseractMOOCBundle:Formateur:CoachDisplayCourses.html.twig');
    }
    
    public function displayTestsAction($id) {
        $em = $this->getDoctrine()->getManager();
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' =>$this->getUser()->getId(),
                                                                                           'vue'=>'non' ));
        $nbr=count($notifications);
        $requette = $em->createQuery("SELECT E FROM TesseractMOOCBundle:Epreuve E INNER JOIN TesseractMOOCBundle:Cours C WITH E.idCours=C.id WHERE C.idUtilisateur = :id");
        $requette->setParameter('id',$id);
        $epreuves=$requette->getResult();
        $invites = $em->getRepository("TesseractMOOCBundle:Invitations")->findBy(array('idUtilisateur'=>$this->getUser()->getId(), 'sens'=>'F', 'etat'=>'ATT', 'idOrganisme'=>0));
        $invite = 0;
        $invite = count($invites);
        
        return $this->render('TesseractMOOCBundle:Formateur:CoachDisplayTests.html.twig',array('epreuves'=>$epreuves, 
                                                                                               'notifications'=>$notifications, 
                                                                                               'nbrnot'=>$nbr,
                                                                                               'committeeInvite'=>$invite));
    }
    
    public function displayCommitteeAction($i) {
        $em = $this->getDoctrine()->getManager();
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' =>$this->getUser()->getId(),
                                                                                           'vue'=>'non' ));
        $nbr=count($notifications);
        
        $invites = $em->getRepository("TesseractMOOCBundle:Invitations")->findBy(array('idUtilisateur'=>$this->getUser()->getId(), 'sens'=>'F', 'etat'=>'ATT', 'idOrganisme'=>0));
        $invites[0]->setEtat($i);
        $em->persist($invites[0]);
        $em->flush();
        
        $invites = $em->getRepository("TesseractMOOCBundle:Invitations")->findBy(array('idUtilisateur'=>$this->getUser()->getId(), 'sens'=>'F', 'etat'=>'ATT', 'idOrganisme'=>0));
        $invite = 0;
        $invite = count($invites);
        
        return $this->render('TesseractMOOCBundle:Formateur:CoachDashboard.html.twig',array('notifications'=>$notifications,
                                                                                            'nbrnot'=>$nbr, 
                                                                                            'committeeInvite'=>$invite));
    }
    
    public function displayOrganisationAction() {
        $em = $this->getDoctrine()->getManager();
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' =>$this->getUser()->getId(),
                                                                                           'vue'=>'non' ));
        $nbr=count($notifications);
        return $this->render('TesseractMOOCBundle:Formateur:CoachDisplayOrganisation.html.twig');
    }
    
    public function displayMessagesAction() {
        $em = $this->getDoctrine()->getManager();
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' =>$this->getUser()->getId(),
                                                                                           'vue'=>'non' ));
        $nbr=count($notifications);
        $invites = $em->getRepository("TesseractMOOCBundle:Invitations")->findBy(array('idUtilisateur'=>$this->getUser()->getId(), 'sens'=>'F', 'etat'=>'ATT', 'idOrganisme'=>0));
        $invite = 0;
        $invite = count($invites);
        return $this->render('TesseractMOOCBundle:Formateur:CoachDisplayMessages.html.twig',array('notifications'=>$notifications,
                                                                                            'nbrnot'=>$nbr, 
                                                                                            'committeeInvite'=>$invite));
    }
    
    public function displayReportAction() {
        $em = $this->getDoctrine()->getManager();
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' =>$this->getUser()->getId(),
                                                                                           'vue'=>'non' ));
        $nbr=count($notifications);
        return $this->render('TesseractMOOCBundle:Formateur:CoachDisplayReport.html.twig');
    }
    
    public function quizDeleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $quiz = $em->getRepository("TesseractMOOCBundle:Epreuve")->find($id);
        $em->remove($quiz);
        $em->flush();
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' =>$this->getUser()->getId(),
                                                                                           'vue'=>'non' ));
        $nbr=count($notifications);
        $requette = $em->createQuery("SELECT E FROM TesseractMOOCBundle:Epreuve E INNER JOIN TesseractMOOCBundle:Cours C WITH E.idCours=C.id WHERE C.idUtilisateur = :id");
        $requette->setParameter('id',$id);
        $epreuves=$requette->getResult();
        $invites = $em->getRepository("TesseractMOOCBundle:Invitations")->findBy(array('idUtilisateur'=>$this->getUser()->getId(), 'sens'=>'F', 'etat'=>'ATT', 'idOrganisme'=>0));
        $invite = 0;
        $invite = count($invites);
        
        return $this->render('TesseractMOOCBundle:Formateur:CoachDisplayTests.html.twig',array('epreuves'=>$epreuves, 
                                                                                               'notifications'=>$notifications, 
                                                                                               'nbrnot'=>$nbr,
                                                                                               'committeeInvite'=>$invite));
    }
    
    public function quizAddAction() {
        $em = $this->getDoctrine()->getManager();
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' =>$this->getUser()->getId(),
                                                                                           'vue'=>'non' ));
        $nbr=count($notifications);
        $invites = $em->getRepository("TesseractMOOCBundle:Invitations")->findBy(array('idUtilisateur'=>$this->getUser()->getId(), 'sens'=>'F', 'etat'=>'ATT', 'idOrganisme'=>0));
        $invite = 0;
        $invite = count($invites);
        return $this->render('TesseractMOOCBundle:Formateur:CoachAddQuiz.html.twig',array('notifications'=>$notifications, 
                                                                                          'nbrnot'=>$nbr,
                                                                                          'committeeInvite'=>$invite));
    }
    
    public function quizAjoutAction(Request $req) {
        $type= $req->get('type');
        $duree= $req->get('duree');
        $diff = $req->get('difficulty');
            
      
        $ep=new Epreuve();
        $ep->setDuree($duree);
        $ep->setDifficulte($diff);
        $ep->setType($type);
        
        
        
        $em = $this->getDoctrine()->getManager();   
        $em->persist($em);
        $em->flush();
        
       
        
        return new Response('OK => '.$ep->getId());
    }
}
