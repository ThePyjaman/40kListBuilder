<?php

namespace BM\WarhammerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Weapon
 *
 * @ORM\Table(name="weapon")
 * @ORM\Entity(repositoryClass="BM\WarhammerBundle\Repository\WeaponRepository")
 */
class Weapon
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
     * @var array
     *
     * @ORM\Column(name="min_range", type="array")
     */
    private $minRange;

    /**
     * @var array
     *
     * @ORM\Column(name="max_range", type="array")
     */
    private $maxRange;

    /**
     * @var array
     *
     * @ORM\Column(name="type", type="array")
     */
    private $type;

    /**
     * @var array
     *
     * @ORM\Column(name="shots", type="array")
     */
    private $shots;

    /**
     * @var array
     *
     * @ORM\Column(name="f", type="array")
     */
    private $f;

    /**
     * @var array
     *
     * @ORM\Column(name="pa", type="array")
     */
    private $pa;

    /**
     * @var array
     *
     * @ORM\Column(name="damage", type="array")
     */
    private $damage;

    /**
     * @var array
     *
     * @ORM\Column(name="rules", type="array")
     */
    private $rules;


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
     * Set minRange
     *
     * @param array $minRange
     *
     * @return Weapon
     */
    public function setMinRange($minRange)
    {
        $this->minRange = $minRange;

        return $this;
    }

    /**
     * Get minRange
     *
     * @return array
     */
    public function getMinRange()
    {
        return $this->minRange;
    }

    /**
     * Set maxRange
     *
     * @param array $maxRange
     *
     * @return Weapon
     */
    public function setMaxRange($maxRange)
    {
        $this->maxRange = $maxRange;

        return $this;
    }

    /**
     * Get maxRange
     *
     * @return array
     */
    public function getMaxRange()
    {
        return $this->maxRange;
    }

    /**
     * Set type
     *
     * @param array $type
     *
     * @return Weapon
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return array
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set shots
     *
     * @param array $shots
     *
     * @return Weapon
     */
    public function setShots($shots)
    {
        $this->shots = $shots;

        return $this;
    }

    /**
     * Get shots
     *
     * @return array
     */
    public function getShots()
    {
        return $this->shots;
    }

    /**
     * Set f
     *
     * @param array $f
     *
     * @return Weapon
     */
    public function setF($f)
    {
        $this->f = $f;

        return $this;
    }

    /**
     * Get f
     *
     * @return array
     */
    public function getF()
    {
        return $this->f;
    }

    /**
     * Set pa
     *
     * @param array $pa
     *
     * @return Weapon
     */
    public function setPa($pa)
    {
        $this->pa = $pa;

        return $this;
    }

    /**
     * Get pa
     *
     * @return array
     */
    public function getPa()
    {
        return $this->pa;
    }

    /**
     * Set damage
     *
     * @param array $damage
     *
     * @return Weapon
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;

        return $this;
    }

    /**
     * Get damage
     *
     * @return array
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Set rules
     *
     * @param array $rules
     *
     * @return Weapon
     */
    public function setRules($rules)
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * Get rules
     *
     * @return array
     */
    public function getRules()
    {
        return $this->rules;
    }
}

