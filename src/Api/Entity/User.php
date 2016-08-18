<?php
namespace Api\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use Swagger\Annotations as SWG;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 * @SWG\Model(id="User")
 */
class User {
    
    /**
     * @Type("integer")
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @Groups({"list", "detail"})
     * @SWG\Property(name="id", type="integer")
     */
    protected $id;

    /**
     * @Type("string")
     * @ORM\Column(type="string")
     * @Groups({"list", "detail"})
     * @SWG\Property(name="firstName", type="string")
     */
    protected $firstName;

    /**
     * @Type("string")
     * @ORM\Column(type="string")
     * @Groups({"list", "detail"})
     * @SWG\Property(name="lastName", type="string")
     */
    protected $lastName;
    
    /**
     * @Type("string")
     * @ORM\Column(type="string")
     * @Groups({"list", "detail"})
     * @SWG\Property(name="email", type="string")
     */
    protected $email;

    public function __construct() {
        
    }
}