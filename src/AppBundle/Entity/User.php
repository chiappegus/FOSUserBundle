<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="´user´")
 */
class User extends BaseUser
{
    /**
     * @ORM\Column( type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column( type="string")
     */
    private $firstName;

    /**
     * Get firstName
     * @return
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Get id
     * @return
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Set email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->setUsername($email);
        return parent::setEmail($email);
    }

}
