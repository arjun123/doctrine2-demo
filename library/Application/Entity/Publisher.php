<?php

namespace Application\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Application\Entity\Publisher
 * 
 * @ORM\Entity
 * @ORM\Table(name="publisher")
 */
Class Publisher
{
    /**
     *
     * @var integer $id
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    
    /**
     *
     * @var string $name
     * @ORM\Column(name="name", type="string", length= 100, nullable=false)
     */
    protected $name;
    /**
     * @var $address
     * @ORM\Column(name="address", type="string", length= 100, nullable=true) 
     */
    protected $address;
    
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }


}
