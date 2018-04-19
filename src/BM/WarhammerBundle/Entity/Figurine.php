<?php

namespace BM\WarhammerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Figurine
 *
 * @ORM\Table(name="figurine")
 * @ORM\Entity(repositoryClass="BM\WarhammerBundle\Repository\FigurineRepository")
 */
class Figurine
{

    //JOINTURES

    /**
     * @ORM\ManyToMany(targetEntity="Type")
     * @ORM\JoinTable(name="type_association",
     *      joinColumns={@ORM\JoinColumn(name="figurine_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="type_id", referencedColumnName="id")}
     *      )
     */
    private $type_keywords;

    /**
     * @ORM\ManyToMany(targetEntity="Rules")
     * @ORM\JoinTable(name="rules_association",
     *      joinColumns={@ORM\JoinColumn(name="figurine_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="type_id", referencedColumnName="id")}
     *      )
     */
    private $rules;


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
     * @var int
     *
     * @ORM\Column(name="m", type="integer", nullable=true)
     */
    private $m;

    /**
     * @var int
     *
     * @ORM\Column(name="cc", type="integer", nullable=true)
     */
    private $cc;

    /**
     * @var int
     *
     * @ORM\Column(name="ct", type="integer", nullable=true)
     */
    private $ct;

    /**
     * @var int
     *
     * @ORM\Column(name="f", type="integer", nullable=true)
     */
    private $f;

    /**
     * @var int
     *
     * @ORM\Column(name="e", type="integer", nullable=true)
     */
    private $e;

    /**
     * @var int
     *
     * @ORM\Column(name="pv", type="integer", nullable=true)
     */
    private $pv;

    /**
     * @var int
     *
     * @ORM\Column(name="a", type="integer", nullable=true)
     */
    private $a;

    /**
     * @var int
     *
     * @ORM\Column(name="cd", type="integer", nullable=true)
     */
    private $cd;

    /**
     * @var int
     *
     * @ORM\Column(name="sv", type="integer", nullable=true)
     */
    private $sv;

    /**
     * @var int
     *
     * @ORM\Column(name="fnp", type="integer", nullable=true)
     */
    private $fnp;

    /**
     * @var int
     *
     * @ORM\Column(name="psy", type="integer", nullable=true)
     */
    private $psy;

    /**
     * @var int
     *
     * @ORM\Column(name="deny", type="integer", nullable=true)
     */
    private $deny;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="has_degressive_profile", type="boolean")
     */
    private $hasDegressiveProfile;


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
     * Set m
     *
     * @param integer $m
     *
     * @return Figurine
     */
    public function setM($m)
    {
        $this->m = $m;

        return $this;
    }

    /**
     * Get m
     *
     * @return int
     */
    public function getM()
    {
        return $this->m;
    }

    /**
     * Set cc
     *
     * @param integer $cc
     *
     * @return Figurine
     */
    public function setCc($cc)
    {
        $this->cc = $cc;

        return $this;
    }

    /**
     * Get cc
     *
     * @return int
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * Set ct
     *
     * @param integer $ct
     *
     * @return Figurine
     */
    public function setCt($ct)
    {
        $this->ct = $ct;

        return $this;
    }

    /**
     * Get ct
     *
     * @return int
     */
    public function getCt()
    {
        return $this->ct;
    }

    /**
     * Set f
     *
     * @param integer $f
     *
     * @return Figurine
     */
    public function setF($f)
    {
        $this->f = $f;

        return $this;
    }

    /**
     * Get f
     *
     * @return int
     */
    public function getF()
    {
        return $this->f;
    }

    /**
     * Set e
     *
     * @param integer $e
     *
     * @return Figurine
     */
    public function setE($e)
    {
        $this->e = $e;

        return $this;
    }

    /**
     * Get e
     *
     * @return int
     */
    public function getE()
    {
        return $this->e;
    }

    /**
     * Set pv
     *
     * @param integer $pv
     *
     * @return Figurine
     */
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get pv
     *
     * @return int
     */
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set a
     *
     * @param integer $a
     *
     * @return Figurine
     */
    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    /**
     * Get a
     *
     * @return int
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * Set cd
     *
     * @param integer $cd
     *
     * @return Figurine
     */
    public function setCd($cd)
    {
        $this->cd = $cd;

        return $this;
    }

    /**
     * Get cd
     *
     * @return int
     */
    public function getCd()
    {
        return $this->cd;
    }

    /**
     * Set sv
     *
     * @param integer $sv
     *
     * @return Figurine
     */
    public function setSv($sv)
    {
        $this->sv = $sv;

        return $this;
    }

    /**
     * Get sv
     *
     * @return int
     */
    public function getSv()
    {
        return $this->sv;
    }

    /**
     * Set fnp
     *
     * @param integer $fnp
     *
     * @return Figurine
     */
    public function setFnp($fnp)
    {
        $this->fnp = $fnp;

        return $this;
    }

    /**
     * Get fnp
     *
     * @return int
     */
    public function getFnp()
    {
        return $this->fnp;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Figurine
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
     * Set psy
     *
     * @param integer $psy
     *
     * @return Figurine
     */
    public function setPsy($psy)
    {
        $this->psy = $psy;

        return $this;
    }

    /**
     * Get psy
     *
     * @return int
     */
    public function getPsy()
    {
        return $this->psy;
    }

    /**
     * Set deny
     *
     * @param integer $deny
     *
     * @return Figurine
     */
    public function setDeny($deny)
    {
        $this->deny = $deny;

        return $this;
    }

    /**
     * Get deny
     *
     * @return int
     */
    public function getDeny()
    {
        return $this->deny;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Figurine
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

    /**
     * Set hasDegressiveProfile
     *
     * @param boolean $hasDegressiveProfile
     *
     * @return Figurine
     */
    public function setHasDegressiveProfile($hasDegressiveProfile)
    {
        $this->hasDegressiveProfile = $hasDegressiveProfile;

        return $this;
    }

    /**
     * Get hasDegressiveProfile
     *
     * @return boolean
     */
    public function getHasDegressiveProfile()
    {
        return $this->hasDegressiveProfile;
    }


    /**
     * Set faction_keywords
     *
     * @param array $type_keywords
     *
     * @return Figurine
     */
    public function setType_keywords($type_keywords)
    {
        $this->type_keywords = $type_keywords;

        return $this;
    }

    /**
     * Get type_keywords
     *
     * @return array
     */
    public function getType_keywords()
    {
        return $this->type_keywords;
    }

    /**
     * Set rules
     *
     * @param array $rules
     *
     * @return Figurine
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

