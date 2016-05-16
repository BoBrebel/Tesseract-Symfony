<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tesseract\MOOCBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of OrganisationForForm
 *
 * @author haikal
 */
class OrganisationForForm {

    private $pseudo;
    private $usernameCana;
    private $mail;
    private $mailC;
    private $enabled;
    private $salt = "{nosalt}";
    private $mdp;
    private $locked = 0;
    private $expired = 0;
    private $role;
    private $nom;
    private $prenom;
    private $telephone;
    private $adresse;
    private $photo;
    private $nomO;
    private $adressO;
    private $emailO;
    private $matriculeO;
    private $photoO;
    private $enabledO = -1;

    /**
     * @Assert\File(maxSize="50000k")
     */
    public $file;

    /**
     * @Assert\File(maxSize="50000k")
     */
    public $file2;

    function getPseudo() {
        return $this->pseudo;
    }

    function getUsernameCana() {
        return $this->usernameCana;
    }

    function getMail() {
        return $this->mail;
    }

    function getMailC() {
        return $this->mailC;
    }

    function getEnabled() {
        return $this->enabled;
    }

    function getSalt() {
        return $this->salt;
    }

    function getMdp() {
        return $this->mdp;
    }

    function getLocked() {
        return $this->locked;
    }

    function getExpired() {
        return $this->expired;
    }

    function getRole() {
        return 'ROLE_AOG';
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getPhoto() {
        return $this->photo;
    }

    function getNomO() {
        return $this->nomO;
    }

    function getAdressO() {
        return $this->adressO;
    }

    function getEmailO() {
        return $this->emailO;
    }

    function getMatriculeO() {
        return $this->matriculeO;
    }

    function getPhotoO() {
        return $this->photoO;
    }

    function getEnabledO() {
        return $this->enabledO;
    }

    function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }

    function setUsernameCana($usernameCana) {
        $this->usernameCana = $usernameCana;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setMailC($mailC) {
        $this->mailC = $mailC;
    }

    function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    function setSalt($salt) {
        $this->salt = $salt;
    }

    function setMdp($mdp) {
        $this->mdp = $mdp;
    }

    function setLocked($locked) {
        $this->locked = $locked;
    }

    function setExpired($expired) {
        $this->expired = $expired;
    }

    function setRole($role) {
        $this->role = $role;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setPhoto($photo) {
        $this->photo = $photo;
    }

    function setNomO($nomO) {
        $this->nomO = $nomO;
    }

    function setAdressO($adressO) {
        $this->adressO = $adressO;
    }

    function setEmailO($emailO) {
        $this->emailO = $emailO;
    }

    function setMatriculeO($matriculeO) {
        $this->matriculeO = $matriculeO;
    }

    function setPhotoO($photoO) {
        $this->photoO = $photoO;
    }

    function setEnabledO($enabledO) {
        $this->enabledO = $enabledO;
    }

    public function getWebPath() {
        return null === $this->photo ? null : $this->getUploadDir() . '/' . $this->photo;
    }

    public function getWebPath2() {
        return null === $this->photoO ? null : $this->getUploadDir() . '/' . $this->photoO;
    }

    protected function getUploadRootDir() {

        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir() {

        return 'uploads/pictures';
    }

    public function uploadProfilePicture() {

        $nowTime = new \DateTime();

        $randTime = $nowTime->format('Y-m-d-H-i-s');

       
        $this->file->move($this->getUploadRootDir(), md5($this->file->getClientOriginalName() . '' . $randTime) . '.jpg');

        // On sauvegarde le nom de fichier
        $this->photo = md5($this->file->getClientOriginalName() . '' . $randTime) . '.jpg';


        // La propriété file ne servira plus
        $this->file = null;
    }

    public function uploadProfilePicture2() {

        $nowTime = new \DateTime();

        $randTime = $nowTime->format('Y-m-d-H-i-s');


        $this->file2->move($this->getUploadRootDir(), md5($this->file2->getClientOriginalName() . '' . $randTime) . '.jpg');

        // On sauvegarde le nom de fichier
        $this->photoO = md5($this->file2->getClientOriginalName() . '' . $randTime) . '.jpg';


        // La propriété file ne servira plus
        $this->file2 = null;
    }

    function getFile() {
        return $this->file;
    }

    function getFile2() {
        return $this->file2;
    }

    function setFile($file) {
        $this->file = $file;
    }

    function setFile2($file2) {
        $this->file2 = $file2;
    }

}
