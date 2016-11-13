<?php

namespace MDQ\QuestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CritEditQ
 *
 * @ORM\Table(name="criteditqaval")
 * @ORM\Entity
 */
class CritEditQaVal
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
     * @var integer
     *
     * @ORM\Column(name="diff", type="integer")
     */
    private $diff;

    /**
     * @var string
     *
     * @ORM\Column(name="dom1", type="string", length=50)
     */
    private $dom1;    

    /**
     * @var string
     *
     * @ORM\Column(name="crit", type="string", length=50)
     */
    private $crit;

    /**
     * @var string
     *
     * @ORM\Column(name="sens", type="string", length=10)
     */
    private $sens;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbdeQ", type="integer")
     */
    private $nbdeQ;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbmin", type="integer")
     */
    private $nbmin;

	/**
     * @var integer
     *
     * @ORM\Column(name="repAdmin", type="integer")
     */
    private $repAdmin;
	
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
     * Set error
     *
     * @param boolean $error
     * @return CritEditQ
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get error
     *
     * @return boolean 
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set diff
     *
     * @param integer $diff
     * @return CritEditQ
     */
    public function setDiff($diff)
    {
        $this->diff = $diff;

        return $this;
    }

    /**
     * Get diff
     *
     * @return integer 
     */
    public function getDiff()
    {
        return $this->diff;
    }

    /**
     * Set dom1
     *
     * @param string $dom1
     * @return CritEditQ
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
     * Set theme
     *
     * @param string $theme
     * @return CritEditQ
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string 
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set dom2
     *
     * @param string $dom2
     * @return CritEditQ
     */
    public function setDom2($dom2)
    {
        $this->dom2 = $dom2;

        return $this;
    }

    /**
     * Get dom2
     *
     * @return string 
     */
    public function getDom2()
    {
        return $this->dom2;
    }

    /**
     * Set dom3
     *
     * @param string $dom3
     * @return CritEditQ
     */
    public function setDom3($dom3)
    {
        $this->dom3 = $dom3;

        return $this;
    }

    /**
     * Get dom3
     *
     * @return string 
     */
    public function getDom3()
    {
        return $this->dom3;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return CritEditQ
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set crit
     *
     * @param string $crit
     * @return CritEditQ
     */
    public function setCrit($crit)
    {
        $this->crit = $crit;

        return $this;
    }

    /**
     * Get crit
     *
     * @return string 
     */
    public function getCrit()
    {
        return $this->crit;
    }

    /**
     * Set sens
     *
     * @param string $sens
     * @return CritEditQ
     */
    public function setSens($sens)
    {
        $this->sens = $sens;

        return $this;
    }

    /**
     * Get sens
     *
     * @return string 
     */
    public function getSens()
    {
        return $this->sens;
    }

    /**
     * Set nbdeQ
     *
     * @param integer $nbdeQ
     * @return CritEditQ
     */
    public function setNbdeQ($nbdeQ)
    {
        $this->nbdeQ = $nbdeQ;

        return $this;
    }

    /**
     * Get nbdeQ
     *
     * @return integer 
     */
    public function getNbdeQ()
    {
        return $this->nbdeQ;
    }

    /**
     * Set nbmin
     *
     * @param integer $nbmin
     * @return CritEditQ
     */
    public function setNbmin($nbmin)
    {
        $this->nbmin = $nbmin;

        return $this;
    }

    /**
     * Get nbmin
     *
     * @return integer 
     */
    public function getNbmin()
    {
        return $this->nbmin;
    }

    /**
     * Set valid
     *
     * @param integer $valid
     * @return CritEditQ
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return integer 
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Set repAdmin
     *
     * @param integer $repAdmin
     * @return CritEditQ
     */
    public function setRepAdmin($repAdmin)
    {
        $this->repAdmin = $repAdmin;

        return $this;
    }

    /**
     * Get repAdmin
     *
     * @return integer 
     */
    public function getRepAdmin()
    {
        return $this->repAdmin;
    }
}
