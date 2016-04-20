<?php

namespace Tesseract\MOOCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ApprenantController extends Controller {

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

        return $this->render('TesseractMOOCBundle:Apprenant:apprenant.html.twig', array('user' => $user, 'item' => $items, 'pagination' => $pagination));
    }

    public function profileApprenantAction() {
        $user = $this->getUser();
        $utilisateur = new \Tesseract\MOOCBundle\Entity\Utilisateur();
        $form = $this->createForm(new \Tesseract\MOOCBundle\Form\CurrentUserType(), $user);
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository("TesseractMOOCBundle:Matiere")->findAll();


        $request = $this->getRequest();

        $form->handleRequest($request);





        if ($form->isValid() && ($request->getMethod() == "POST")) {
            print_r($user->getFile());
            $user->uploadProfilePicture();
            $em->merge($user);
            $em->flush();

            return $this->render("TesseractMOOCBundle:Apprenant:profile.html.twig", array('form' => $form->createView(), 'user' => $user, 'item' => $items));
        }

        return $this->render('TesseractMOOCBundle:Apprenant:profile.html.twig', array('form' => $form->createView(), 'user' => $user, 'item' => $items));
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
        return $this->render('TesseractMOOCBundle:Apprenant:courses_categ.html.twig', array('user' => $user, 'item' => $items, 'pagination' => $pagination));
    }

    public function coursesSubedApprenantAction(\Symfony\Component\HttpFoundation\Request $req) {
        $user = $this->getUser();
        $id = $req->get('id');
        $em = $this->getDoctrine()->getManager();

        $cours = $em->getRepository('TesseractMOOCBundle:Cours')->find($id);
        $session = new \Tesseract\MOOCBundle\Entity\SessionCours();
        $session->setNbr(0);

        $session->setIdUtilisateur($user);
        $session->setIdCours($cours);
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
        return $this->render('TesseractMOOCBundle:Apprenant:subs.html.twig', array('pagination' => $pagination, 'session' => $sessioncours[0]));
    }

    public function coursesCommentsApprenantAction(\Symfony\Component\HttpFoundation\Request $req) {
        $user = $this->getUser();
        $id = $req->get('id');
        $request = $this->get('request');
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository("TesseractMOOCBundle:Matiere")->findAll();
        $cours = $em->getRepository("TesseractMOOCBundle:Cours")->find($id);

        $dql = 'SELECT cc.commentaire, cc.date , c.username,c.photo FROM TesseractMOOCBundle:CommentaireCours cc join cc.idUtilisateur c  where cc.idCours = :id '
        ;

        $query = $em->createQuery($dql)->setParameters(array('id' => $id));
        $pagination = $query->getResult();


        return $this->render('TesseractMOOCBundle:Apprenant:commentairecours.html.twig', array('user' => $user, 'item' => $items, 'cours' => $cours, 'pagination' => $pagination));
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
