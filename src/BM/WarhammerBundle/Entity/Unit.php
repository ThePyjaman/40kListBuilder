<?php

namespace BM\WarhammerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unit
 *
 * @ORM\Table(name="unit")
 * @ORM\Entity(repositoryClass="BM\WarhammerBundle\Repository\UnitRepository")
 */
class Unit
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="datasheet", type="string", length=255, nullable=true)
     */
    private $datasheet;

    /**
     * @ORM\ManyToMany(targetEntity="Faction")
     * @ORM\JoinTable(name="faction_association",
     *      joinColumns={@ORM\JoinColumn(name="unit_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="faction_id", referencedColumnName="id")}
     *      )
     */
    private $faction_keywords;


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
     * Set name
     *
     * @param string $name
     *
     * @return Unit
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Unit
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set datasheet
     *
     * @param string $datasheet
     *
     * @return Unit
     */
    public function setDatasheet($datasheet)
    {
        $this->datasheet = $datasheet;

        return $this;
    }

    /**
     * Get datasheet
     *
     * @return string
     */
    public function getDatasheet()
    {
        return $this->datasheet;
    }

    /**
     * Set faction_keywords
     *
     * @param array $faction_keywords
     *
     * @return Unit
     */
    public function setFaction_keywords($faction_keywords)
    {
        $this->faction_keywords = $faction_keywords;

        return $this;
    }

    /**
     * Get faction_keywords
     *
     * @return array
     */
    public function getFaction_keywords()
    {
        return $this->faction_keywords;
    }

}

