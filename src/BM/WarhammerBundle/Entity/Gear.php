<?php

namespace BM\WarhammerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gear
 *
 * @ORM\Table(name="gear")
 * @ORM\Entity(repositoryClass="BM\WarhammerBundle\Repository\GearRepository")
 */
class Gear
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="rules", type="string", length=255)
     */
    private $rules;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rules
     *
     * @param string $rules
     *
     * @return Gear
     */
    public function setRules($rules)
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * Get rules
     *
     * @return string
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Gear
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }
}

