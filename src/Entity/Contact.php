<?php
// src/Entity/Contact.php
  
namespace App\Entity;
 
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Doctrine\Common\Collections\ArrayCollection;

class Contact
{
    protected $name;
  
    protected $email;
  
    protected $subject;
  
    protected $body;

  // getters and setters 


    public function getName()
    {
        return $this->name;
    }
  
    public function setName($name)
    {
        $this->name = $name;
    }
  
    public function getEmail()
    {
        return $this->email;
    }
  
    public function setEmail($email)
    {
        $this->email = $email;
    }
  
    public function getSubject()
    {
        return $this->subject;
    }
  
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
  
    public function getBody()
    {
        return $this->body;
    }
  
    public function setBody($body)
    {
        $this->body = $body;
    }

    //validators for the form
      public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('name', new NotBlank());
  
        $metadata->addPropertyConstraint('email', new Email());
  
        $metadata->addPropertyConstraint('subject', new NotBlank());
        $metadata->addPropertyConstraint('subject', new Length(array('max'=> 50)));
  
        $metadata->addPropertyConstraint('body', new Length(array('min'=> 50)));
    }
}