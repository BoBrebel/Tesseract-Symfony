<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tesseract\MOOCBundle\Repository;


class RepositoryCommentsCours extends \Doctrine\ORM\EntityRepository{
   
    public function afficherCommentsCours($idCours) {
        
       return $this->getEntityManager()
            ->createQuery(
                'SELECT c.photo,c.username,cc.commentaire, cc.date FROM TesseractMOOCBundle:CommentaireCours cc  join TesseractMOOCBundle:Utilisateur c where cc.idCours = :id '
            )->setParameter('id', $idCours)
            ->getResult(); 
        
    }
}
