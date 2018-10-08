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

}
