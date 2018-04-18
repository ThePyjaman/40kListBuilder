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
     * @ORM\Column(name="mouvement", type="array")
     */
    private $mouvement;

    /**
     * @var array
     *
     * @ORM\Column(name="cc", type="array")
     */
    private $cc;

    /**
     * @var array
     *
     * @ORM\Column(name="ct", type="array")
     */
    private $ct;

    /**
     * @var array
     *
     * @ORM\Column(name="f", type="array")
     */
    private $f;

    /**
     * @var array
     *
     * @ORM\Column(name="e", type="array")
     */
    private $e;

    /**
     * @var array
     *
     * @ORM\Column(name="pv", type="array")
     */
    private $pv;


    /**
     * @var array
     *
     * @ORM\Column(name="a", type="array")
     */
    private $a;

    /**
     * @var array
     *
     * @ORM\Column(name="cd", type="array")
     */
    private $cd;

    /**
     * @var array
     *
     * @ORM\Column(name="svg", type="array")
     */
    private $svg;

    /**
     * @var array
     *
     * @ORM\Column(name="fnp", type="array")
     */
    private $fnp;

    /**
     * @var array
     *
     * @ORM\Column(name="cast", type="array")
     */
    private $cast;

    /**
     * @var array
     *
     * @ORM\Column(name="deny", type="array")
     */
    private $deny;

    /**
     * @var array
     *
     * @ORM\Column(name="rules", type="array")
     */
    private $rules;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;

    /**
     * @ORM\ManyToMany(targetEntity="Weapon")
     * @ORM\JoinTable(name="weapon_association",
     *      joinColumns={@ORM\JoinColumn(name="weapon_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="figurine_id", referencedColumnName="id")}
     *      )
     */
    private $weapons;

    /**
     * @ORM\ManyToMany(targetEntity="Gear")
     * @ORM\JoinTable(name="gear_association",
     *      joinColumns={@ORM\JoinColumn(name="gear_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="figurine_id", referencedColumnName="id")}
     *      )
     */
    private $gear;

    /**
     * @ORM\ManyToMany(targetEntity="Keyword")
     * @ORM\JoinTable(name="type_association",
     *      joinColumns={@ORM\JoinColumn(name="type_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="figurine_id", referencedColumnName="id")}
     *      )
     */
    private $type_keywords;



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
     * Set mouvement
     *
     * @param array $mouvement
     *
     * @return Figurine
     */
    public function setMouvement($mouvement)
    {
        $this->mouvement = $mouvement;

        return $this;
    }

    /**
     * Get mouvement
     *
     * @return array
     */
    public function getMouvement()
    {
        return $this->mouvement;
    }

    /**
     * Set cc
     *
     * @param array $cc
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
     * @return array
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * Set ct
     *
     * @param array $ct
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
     * @return array
     */
    public function getCt()
    {
        return $this->ct;
    }

    /**
     * Set f
     *
     * @param array $f
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
     * @return array
     */
    public function getF()
    {
        return $this->f;
    }

    /**
     * Set e
     *
     * @param array $e
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
     * @return array
     */
    public function getE()
    {
        return $this->e;
    }

    /**
     * Set pv
     *
     * @param array $pv
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
     * @return array
     */
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set aa
     *
     * @param array $aa
     *
     * @return Figurine
     */
    public function setA($a)
    {
        $this->aa = $a;

        return $this;
    }

    /**
     * Get a
     *
     * @return array
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * Set cd
     *
     * @param array $cd
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
     * @return array
     */
    public function getCd()
    {
        return $this->cd;
    }

    /**
     * Set svg
     *
     * @param array $svg
     *
     * @return Figurine
     */
    public function setSvg($svg)
    {
        $this->svg = $svg;

        return $this;
    }

    /**
     * Get svg
     *
     * @return array
     */
    public function getSvg()
    {
        return $this->svg;
    }

    /**
     * Set fnp
     *
     * @param array $fnp
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
     * @return array
     */
    public function getFnp()
    {
        return $this->fnp;
    }

    /**
     * Set cast
     *
     * @param array $cast
     *
     * @return Figurine
     */
    public function setCast($cast)
    {
        $this->cast = $cast;

        return $this;
    }

    /**
     * Get cast
     *
     * @return array
     */
    public function getCast()
    {
        return $this->cast;
    }

    /**
     * Set deny
     *
     * @param array $deny
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
     * @return array
     */
    public function getDeny()
    {
        return $this->deny;
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

    /**
     * Set weapons
     *
     * @param array $weapons
     *
     * @return Figurine
     */
    public function setWeapons($weapons)
    {
        $this->weapons = $weapons;

        return $this;
    }

    /**
     * Get weapons
     *
     * @return array
     */
    public function getWeapons()
    {
        return $this->weapons;
    }

    /**
     * Set gear
     *
     * @param array $gear
     *
     * @return Figurine
     */
    public function setGear($gear)
    {
        $this->gear = $gear;

        return $this;
    }

    /**
     * Get gear
     *
     * @return array
     */
    public function getGear()
    {
        return $this->gear;
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
     * Set price
     *
     * @param int $price
     *
     * Return Figurine
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTypeKeywords()
    {
        return $this->type_keywords;
    }

    /**
     * @param mixed $type_keywords
     *
     * Return Figurine
     */
    public function setTypeKeywords($type_keywords)
    {
        $this->type_keywords = $type_keywords;

        return $this;
    }
}

