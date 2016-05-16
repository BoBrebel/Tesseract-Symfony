<?php

namespace Tesseract\MOOCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

class ApprenantController extends Controller {
public function registrationOrganisationAction() {
        $em = $this->getDoctrine()->getManager();
        $entity = new \Tesseract\MOOCBundle\Entity\OrganisationForForm();
        $utilisateur = new \Tesseract\MOOCBundle\Entity\Utilisateur();
        $organisation = new \Tesseract\MOOCBundle\Entity\Organisation();
        $form = $this->createForm(new \Tesseract\MOOCBundle\Form\OrganisationInscType(), $entity);

        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {
        
            $form->bind($request);


          
//            $entity->uploadProfilePicture();
//            $entity->uploadProfilePicture2();

            $utilisateur->setUsername($entity->getPseudo());
            $utilisateur->setNom($entity->getNom());
            $utilisateur->setPrenom($entity->getPrenom());
            $utilisateur->setPhoto($entity->getPhoto());
            $utilisateur->setEmail($entity->getMail());
            $utilisateur->setPassword($entity->getMdp() . "{$entity->getSalt()}");
            $utilisateur->setSalt($entity->getSalt());
            $utilisateur->setLocked($entity->getLocked());
            $utilisateur->setExpired($entity->getExpired());
            $utilisateur->addRole('ROLE_AOG');
            $utilisateur->setTelephone($entity->getTelephone());
            $utilisateur->setAdresse($entity->getAdresse());
            $utilisateur->setEmailCanonical($entity->getMail());
            $utilisateur->setUsernameCanonical($entity->getPseudo());
            $organisation->setNom($entity->getNomO());
            $organisation->setAdress($entity->getAdressO());
            $organisation->setEmail($entity->getEmailO());
            $organisation->setMatricule($entity->getMatriculeO());
            $organisation->setPhoto($entity->getPhotoO());
            $organisation->setEnabled($entity->getEnabledO());
            $em->persist($utilisateur);
            $em->flush();
            $em->persist($organisation);
            $em->flush();
             return $this->render('TesseractMOOCBundle:Login:login.html.twig', array('form' => $form->createView()));
        }
        return $this->render('TesseractMOOCBundle:Registration:registerorg.html.twig', array('form' => $form->createView()));
    }

    public function afficherObjectifAction(Request $req) {

        $id = $req->get('idch');

        $em = $this->getDoctrine()->getManager();
        $objectifs = $em->getRepository("TesseractMOOCBundle:Objectif")->findBy(array("idChapitre" => $id));

        return $this->render('TesseractMOOCBundle:Apprenant2:contenuchapitre.html.twig', array('objs' => $objectifs, 'id' => $id));
    }

    public function updateDataAction(Request $req) {
        $em = $this->getDoctrine()->getManager();
        $id = $req->get('id');
        $comm = $req->get('amp;commentaire');


        $cours = $em->getRepository("TesseractMOOCBundle:Cours")->find($id);

        $commentaire = new \Tesseract\MOOCBundle\Entity\CommentaireCours();
        $commentaire->setCommentaire($comm);

        $d = date('m/d/Y h:i', time());
        $date = \DateTime::createFromFormat("d/m/Y H:i", $d);
        $commentaire->setDate($date);
        $commentaire->setIdUtilisateur($this->getUser());
        $commentaire->setIdCours($cours);

        $em->persist($commentaire);
        $em->flush();
        $user = $this->getUser();

        $request = $this->get('request');
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository("TesseractMOOCBundle:Matiere")->findAll();
        $cours = $em->getRepository("TesseractMOOCBundle:Cours")->find($id);
        $for = $em->getRepository("TesseractMOOCBundle:Utilisateur")->find($cours->getIdUtilisateur());
        $dql = 'SELECT cc.commentaire, cc.date , c.username,c.photo FROM TesseractMOOCBundle:CommentaireCours cc join cc.idUtilisateur c  where cc.idCours = :id '
        ;
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' => $this->getUser()->getId(),
            'vue' => 'non'));

        $nbr = count($notifications);
        $query = $em->createQuery($dql)->setParameters(array('id' => $id));
        $pagination = $query->getResult();


        return $this->render('TesseractMOOCBundle:Apprenant2:commentapprenants.html.twig', array('notifications' => $notifications,
                    'nbrnot' => $nbr, 'user' => $user, 'item' => $items, 'course' => $cours, 'for' => $for, 'pagination' => $pagination));
    }

    public function addCommentAction(Request $request) {





        print_r($request->getMethod());
        if ($request->getMethod() == "POST") {


            return $this->redirectToRoute("course_comments_id");
        }
        return $this->render('TesseractMOOCBundle:Apprenant2:formcomment.html.twig');
    }

    public function getCoursesUtilisateurAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->get('request');
        $dql = "SELECT a FROM TesseractMOOCBundle:Cours a";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->get('page', 1), 6);

        return $this->render('TesseractMOOCBundle:Apprenant2:displaycoursesuser.html.twig', array('pagination' => $pagination));
    }

    public function searchingCoursesAction(\Symfony\Component\HttpFoundation\Request $req) {
        $user = $this->getUser();

        $request = $this->get('request');
        $iid = $req->get('id');

        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository("TesseractMOOCBundle:Matiere")->findAll();
        $cours = $em->getRepository("TesseractMOOCBundle:Cours")->findBy(array('nom' => $iid));
        $dql = "SELECT a FROM TesseractMOOCBundle:Cours a";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->get('page', 1), 6);

        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' => $this->getUser()->getId(),
            'vue' => 'non'));

        $nbr = count($notifications);


        return $this->render('TesseractMOOCBundle:Apprenant2:templatesearching.html.twig', array('notifications' => $notifications,
                    'nbrnot' => $nbr, 'user' => $user, 'item' => $items, 'pagination' => $pagination, 'course' => $cours));
    }

    public function indexAction() {
        $user = $this->getUser();

        $request = $this->get('request');
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository("TesseractMOOCBundle:Matiere")->findAll();

        $dql = "SELECT a FROM TesseractMOOCBundle:Cours a";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->get('page', 1), 6);

        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' => $this->getUser()->getId(),
            'vue' => 'non'));

        $nbr = count($notifications);


        return $this->render('TesseractMOOCBundle:Apprenant2:base.html.twig', array('notifications' => $notifications,
                    'nbrnot' => $nbr, 'user' => $user, 'item' => $items, 'pagination' => $pagination));
    }

    public function profileApprenantAction() {
        $user = $this->getUser();
        $utilisateur = new \Tesseract\MOOCBundle\Entity\Utilisateur();
        $form = $this->createForm(new \Tesseract\MOOCBundle\Form\UtilisateurType(), $user);
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository("TesseractMOOCBundle:Matiere")->findAll();

        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' => $this->getUser()->getId(),
            'vue' => 'non'));

        $nbr = count($notifications);
        $request = $this->getRequest();
        $items = $em->getRepository("TesseractMOOCBundle:Matiere")->findAll();
        $form->handleRequest($request);





        if ($form->isValid() && ($request->getMethod() == "POST")) {
            print_r($user->getFile());
            $user->uploadProfilePicture();
            $em->merge($user);
            $em->flush();

            return $this->render("TesseractMOOCBundle:Apprenant:profile.html.twig", array('notifications' => $notifications,
                        'nbrnot' => $nbr, 'user' => $user, 'item' => $items, 'form' => $form->createView(), 'user' => $user, 'item' => $items));
        }

        return $this->render('TesseractMOOCBundle:Apprenant2:profileapprenant.html.twig', array('notifications' => $notifications,
                    'nbrnot' => $nbr, 'user' => $user, 'item' => $items, 'form' => $form->createView(), 'user' => $user, 'item' => $items));
    }

    public function updatePhoto() {
        
    }

    public function coursesCategApprenantAction(\Symfony\Component\HttpFoundation\Request $req) {
        $user = $this->getUser();
        $id = $req->get('id');
        $request = $this->get('request');
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository("TesseractMOOCBundle:Matiere")->findAll();
        $dql = "SELECT a FROM TesseractMOOCBundle:Cours a where a.idMatiere = :id and a.validation2  = :val";

        $query = $em->createQuery($dql)->setParameters(array('id' => $id, 'val' => 'ACC'));

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->get('page', 1), 4);
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' => $this->getUser()->getId(),
            'vue' => 'non'));

        $nbr = count($notifications);

        return $this->render('TesseractMOOCBundle:Apprenant2:coursebycateg.html.twig', array('notifications' => $notifications,
                    'nbrnot' => $nbr, 'user' => $user, 'item' => $items, 'course' => $pagination));
    }

    public function coursesSubedApprenantAction(\Symfony\Component\HttpFoundation\Request $req) {
//        $user = $this->getUser();
//        $id = $req->get('id');
//        $em = $this->getDoctrine()->getManager();
//
//        $cours = $em->getRepository('TesseractMOOCBundle:Cours')->find($id);
//        $session = new \Tesseract\MOOCBundle\Entity\SessionCours();
//        $session->setNbr(0);
//
//        $session->setIdUtilisateur($user);
//        $session->setIdCours($cours);
////        $em->persist($session);
////        $em->flush();
//        $dql = 'SELECT c FROM TesseractMOOCBundle:Chapitre c where c.idCours = :id '
//        ;
//        $dql2 = 'SELECT c FROM TesseractMOOCBundle:SessionCours c where c.idCours = :id1 and c.idUtilisateur =:id2 '
//        ;
//
//        $query = $em->createQuery($dql)->setParameters(array('id' => $id));
//        $pagination = $query->getResult();
//        $query2 = $em->createQuery($dql2)->setParameters(array('id1' => $id, 'id2' => $user->getId()));
//        $sessioncours = $query2->getResult();
//        , array('pagination' => $pagination, 'session' => $sessioncours[0])
//-----------------------------


        $em = $this->getDoctrine()->getManager();

        $user = $this->getUser();
        $id = $req->get('id');



        $request = $this->get('request');

        $cours = $em->getRepository('TesseractMOOCBundle:Cours')->find($id);
        $items = $em->getRepository("TesseractMOOCBundle:Matiere")->findAll();

        $dql = "SELECT a FROM TesseractMOOCBundle:Cours a";
        $query = $em->createQuery($dql);


        $dql1 = 'SELECT c FROM TesseractMOOCBundle:Chapitre c where c.idCours = :id ';

//   $dql2 = 'SELECT c FROM TesseractMOOCBundle:SessionCours c where c.idCours = :id1 and c.idUtilisateur =:id2 ';

        $query = $em->createQuery($dql1)->setParameters(array('id' => $id));
        $chapters = $query->getResult();
// $query2 = $em->createQuery($dql2)->setParameters(array('id1' => $id, 'id2' => $user->getId()));
//        $sessioncours = $query2->getResult();
//        , array('pagination' => $pagination, 'session' => $sessioncours[0])

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->get('page', 1), 6);

        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' => $this->getUser()->getId(),
            'vue' => 'non'));

        $nbr = count($notifications);


        return $this->render('TesseractMOOCBundle:Apprenant2:displaycourssubsc.html.twig', array('notifications' => $notifications,
                    'nbrnot' => $nbr, 'user' => $user, 'item' => $items, 'pagination' => $pagination, 'course' => $cours, 'chapitres' => $chapters));
    }

    public function coursesCommentsApprenantAction(\Symfony\Component\HttpFoundation\Request $req) {
        $user = $this->getUser();
        $id = $req->get('id');
        $request = $this->get('request');
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository("TesseractMOOCBundle:Matiere")->findAll();
        $cours = $em->getRepository("TesseractMOOCBundle:Cours")->find($id);
        $for = $em->getRepository("TesseractMOOCBundle:Utilisateur")->find($cours->getIdUtilisateur());
        $dql = 'SELECT cc.commentaire, cc.date , c.username,c.photo FROM TesseractMOOCBundle:CommentaireCours cc join cc.idUtilisateur c  where cc.idCours = :id '
        ;
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' => $this->getUser()->getId(),
            'vue' => 'non'));

        $nbr = count($notifications);
        $query = $em->createQuery($dql)->setParameters(array('id' => $id));
        $pagination = $query->getResult();


        return $this->render('TesseractMOOCBundle:Apprenant2:commentapprenants.html.twig', array('notifications' => $notifications,
                    'nbrnot' => $nbr, 'user' => $user, 'item' => $items, 'course' => $cours, 'for' => $for, 'pagination' => $pagination));
    }

    public function afficherContenuCoursAction(\Symfony\Component\HttpFoundation\Request $req) {
        $user = $this->getUser();
        $id = $req->get('idchapitre');
        $em = $this->getDoctrine()->getManager();

        $cours = $em->getRepository('TesseractMOOCBundle:Cours')->find($id);
        $session = new \Tesseract\MOOCBundle\Entity\SessionCours();
        $session->setNbr(0);

        $session->setIdUtilisateur($user);
        $session->setIdCours($cours);

        $dql = 'SELECT c FROM TesseractMOOCBundle:Chapitre c where c.idCours = :id '
        ;
        $dql2 = 'SELECT c FROM TesseractMOOCBundle:SessionCours c where c.idCours = :id1 and c.idUtilisateur =:id2 '
        ;

        $query = $em->createQuery($dql)->setParameters(array('id' => $id));
        $pagination = $query->getResult();
        $query2 = $em->createQuery($dql2)->setParameters(array('id1' => $id, 'id2' => $user->getId()));
        $sessioncours = $query2->getResult();
        return $this->render('TesseractMOOCBundle:Apprenant:subs.html.twig', array('pagination' => $pagination, 'session' => $sessioncours[0]));
    }

    public function terminerCoursAction(\Symfony\Component\HttpFoundation\Request $req) {

        $user = $this->getUser();
        $id = $req->get('id');
        $em = $this->getDoctrine()->getManager();

        $cours = $em->getRepository('TesseractMOOCBundle:Cours')->find($id);


//        $em->persist($session);
//        $em->flush();
        $dql = 'SELECT c FROM TesseractMOOCBundle:Chapitre c where c.idCours = :id '
        ;
        $dql2 = 'SELECT c FROM TesseractMOOCBundle:SessionCours c where c.idCours = :id1 and c.idUtilisateur =:id2 '
        ;

        $query = $em->createQuery($dql)->setParameters(array('id' => $id));
        $pagination = $query->getResult();
        $query2 = $em->createQuery($dql2)->setParameters(array('id1' => $id, 'id2' => $user->getId()));
        $sessioncours = $query2->getResult();
        $sessionn = $sessioncours[0];
        $sessionn->setNbr($sessionn->getNbr() + 1);
        $em->merge($sessionn);
        $em->flush();
        return $this->render('TesseractMOOCBundle:Apprenant:subs.html.twig', array('pagination' => $pagination, 'session' => $sessionn));
    }
}
