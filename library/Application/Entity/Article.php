<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Application\Entity\Article
 * @ORM\Table(name="article")
 * @ORM\Entity
 */
class Article {
    
    /**
     *
     * @var integer $id
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", nullable = false, unique = false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
     private $id;
     
     /**
      * @var $fullName
      * @ORM\Column(name="full_name", type = "text", nullable = true, unique = false)
      */
     private $fullName;
     /**
      *
      * @var text $address
      * @ORM\Column(name="address", type = "text", nullable = true, unique = false)
      */
     private $address;
     /**
      *
      * @var text $company
      * @ORM\Column(name="company", type = "text", nullable = true, unique = false) 
      */
     private $company;
     /**
      * 
      * @var integer
      * @ORM\Column(name="publisher_id", type="integer", nullable=false)
      */
     protected $publisherId;
     
     public function getId()
     {
         return $this->id;
     }

     public function getFullName()
     {
         return $this->fullName;
     }

     public function getAddress()
     {
         return $this->address;
     }

     public function getCompany()
     {
         return $this->company;
     }
     public function getPublisherId()
     {
         return $this->publisherId;
     }

     public function setId($id)
     {
         $this->id = $id;
         return $this;
     }

     public function setFullName($fullName)
     {
         $this->fullName = $fullName;
         return $this;
     }

     public function setAddress( $address)
     {
         $this->address = $address;
         return $this;
     }

     public function setCompany( $company)
     {
         $this->company = $company;
         return $this;
     }
     
     public function setPublisherId( $publisherId)
     {
         $this->publisherId = $publisherId;
         return $this;
     }


     
}
