<?php

namespace MDQ\QuestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Theme
 *
 * @ORM\Table(name="theme")
 * @ORM\Entity(repositoryClass="MDQ\QuestionBundle\Entity\ThemeRepository")
 */
class Theme
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="dom1", type="string", length=255)
     */
    private $dom1;

    /**
     * @var array
     *
     * @ORM\Column(name="dom2", type="array")
     */
    private $dom2;

    /**
     * @var array
     *
     * @ORM\Column(name="dom3", type="array")
     */
    private $dom3;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="nbQ", type="integer")
     */
    private $nbQ;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="prct1", type="integer")
     */
    private $prct1;   

     /**
     * @var integer
     *
     * @ORM\Column(name="prct2", type="integer")
     */
    private $prct2;  
    
      /**
     * @var integer
     *
     * @ORM\Column(name="prct3", type="integer")
     */
    private $prct3;   
    
     /**
     * @var integer
     *
     * @ORM\Column(name="prct4", type="integer")
     */
    private $prct4;  
    
       /**
     * @var integer
     *
     * @ORM\Column(name="prct5", type="integer")
     */
    private $prct5;  
    
      /**
     * @ORM\OneToMany(targetEntity="Dom3", mappedBy="theme", cascade={"persist"}))
     */
    private $dom3map;
    
	public function __construct()
	{
	$this->dom2=[];
	$this->dom3=[];
	$this->nbQ=0;
	$this->prct1=0;
	$this->prct2=0;
	$this->prct3=0;
	$this->prct4=0;
	$this->prct5=0;
	$this->dom3map = new ArrayCollection();
	}
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Theme
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set dom1
     *
     * @param string $dom1
     * @return Theme
     */
    public function setDom1($dom1)
    {
        $this->dom1 = $dom1;

        return $this;
    }

    /**
     * Get dom1
     *
     * @return string 
     */
    public function getDom1()
    {
        return $this->dom1;
    }

    /**
     * Set dom2
     *
     * @param array $dom2
     * @return Theme
     */
    public function setDom2($dom2)
    {
        $this->dom2 = $dom2;

        return $this;
    }

    /**
     * Get dom2
     *
     * @return array 
     */
    public function getDom2()
    {
        return $this->dom2;
    }

    /**
     * Set dom3
     *
     * @param array $dom3
     * @return Theme
     */
    public function setDom3($dom3)
    {
        $this->dom3 = $dom3;

        return $this;
    }

    /**
     * Get dom3
     *
     * @return array 
     */
    public function getDom3()
    {
        return $this->dom3;
    }

    /**
     * Set nbQ
     *
     * @param integer $nbQ
     * @return Theme
     */
    public function setNbQ($nbQ)
    {
        $this->nbQ = $nbQ;

        return $this;
    }

    /**
     * Get nbQ
     *
     * @return integer 
     */
    public function getNbQ()
    {
        return $this->nbQ;
    }

    /**
     * Set prct1
     *
     * @param integer $prct1
     * @return Theme
     */
    public function setPrct1($prct1)
    {
        $this->prct1 = $prct1;

        return $this;
    }

    /**
     * Get prct1
     *
     * @return integer 
     */
    public function getPrct1()
    {
        return $this->prct1;
    }

    /**
     * Set prct2
     *
     * @param integer $prct2
     * @return Theme
     */
    public function setPrct2($prct2)
    {
        $this->prct2 = $prct2;

        return $this;
    }

    /**
     * Get prct2
     *
     * @return integer 
     */
    public function getPrct2()
    {
        return $this->prct2;
    }

    /**
     * Set prct3
     *
     * @param integer $prct3
     * @return Theme
     */
    public function setPrct3($prct3)
    {
        $this->prct3 = $prct3;

        return $this;
    }

    /**
     * Get prct3
     *
     * @return integer 
     */
    public function getPrct3()
    {
        return $this->prct3;
    }

    /**
     * Set prct4
     *
     * @param integer $prct4
     * @return Theme
     */
    public function setPrct4($prct4)
    {
        $this->prct4 = $prct4;

        return $this;
    }

    /**
     * Get prct4
     *
     * @return integer 
     */
    public function getPrct4()
    {
        return $this->prct4;
    }

    /**
     * Set prct5
     *
     * @param integer $prct5
     * @return Theme
     */
    public function setPrct5($prct5)
    {
        $this->prct5 = $prct5;

        return $this;
    }

    /**
     * Get prct5
     *
     * @return integer 
     */
    public function getPrct5()
    {
        return $this->prct5;
    }
    
        /**
     * Add dom3map
     *
     * @param MDQ\QuestionBundle\Entity\Dom3 $dom3map
     */
    public function adddom3map(\MDQ\QuestionBundle\Entity\Dom3 $dom3map)
    {
        $dom3map->setTheme($this);
        $this->dom3map[]= $dom3map;
    }
    /**
     * Get dom3map
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getdom3map()
    {
        return $this->dom3map;
    }
    
}
