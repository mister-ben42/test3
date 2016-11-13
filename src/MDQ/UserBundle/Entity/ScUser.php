<?php

namespace MDQ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ScUser
 *
 * @ORM\Table(name="scuser")
 * @ORM\Entity(repositoryClass="MDQ\UserBundle\Entity\ScUserRepository")
 */
class ScUser
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
     * @ORM\Column(name="nbJMq", type="integer")
     */
    private $nbJMq;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbJdayMq", type="integer")
     */
    private $nbJdayMq;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbJQnF", type="integer")
     */
    private $nbJQnF;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbJdayQnF", type="integer")
     */
    private $nbJdayQnF;
	
	 /**
     * @var integer
     *
     * @ORM\Column(name="nbBrtot", type="integer")
     */
    private $nbBrtot;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nbPtot", type="integer")
     */
    private $nbPtot;
    	
    /**
     * @var integer
     *
     * @ORM\Column(name="nbPMq", type="integer")
     */
    private $nbPMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="scTotMq", type="integer")
     */
    private $scTotMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="scMoyMq", type="decimal", scale=2)
     */
    private $scMoyMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="scMaxMq", type="integer")
     */
    private $scMaxMq;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datescMaxMq", type="date", nullable=true)
     */
    private $datescMaxMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbQtotMq", type="integer")
     */
    private $nbQtotMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbBrtotMq", type="integer")
     */
    private $nbBrtotMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="prctBrtotMq", type="decimal", scale=2)
     */
    private $prctBrtotMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbQhMq", type="integer")
     */
    private $nbQhMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbBrhMq", type="integer")
     */
    private $nbBrhMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="prctBrhMq", type="decimal", scale=2)
     */
    private $prctBrhMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbQgMq", type="integer")
     */
    private $nbQgMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbBrgMq", type="integer")
     */
    private $nbBrgMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="prctBrgMq", type="decimal", scale=2)
     */
    private $prctBrgMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbQdMq", type="integer")
     */
    private $nbQdMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbBrdMq", type="integer")
     */
    private $nbBrdMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="prctBrdMq", type="decimal", scale=2)
     */
    private $prctBrdMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbQalMq", type="integer")
     */
    private $nbQalMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbBralMq", type="integer")
     */
    private $nbBralMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="prctBralMq", type="decimal", scale=2)
     */
    private $prctBralMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbQslMq", type="integer")
     */
    private $nbQslMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbBrslMq", type="integer")
     */
    private $nbBrslMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="prctBrslMq", type="decimal", scale=2)
     */
    private $prctBrslMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbQsnMq", type="integer")
     */
    private $nbQsnMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbBrsnMq", type="integer")
     */
    private $nbBrsnMq;

    /**
     * @var integer
     *
     * @ORM\Column(name="prctBrsnMq", type="decimal", scale=2)
     */
    private $prctBrsnMq;
	

	/**
     * @var array
	 *
	 * @ORM\Column(name="top10month", type="array", nullable=true)
     */
    private $top10month;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="sumtop10month", type="integer", nullable=true)
     */
    private $sumtop10month;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="monthHighScMq", type="integer", nullable=true)
     */
    private $monthHighScMq;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="highClassMonthMq", type="integer", nullable=true)
     */
    private $highClassMonthMq;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="numHighClassMonthMq", type="integer", nullable=true)
     */
    private $numHighClassMonthMq;
	
	/**
     * @var array
	 *
	 * @ORM\Column(name="top5weekMq", type="array", nullable=true)
     */
    private $top5weekMq;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="sumtop5weekMq", type="integer", nullable=true)
     */
    private $sumtop5weekMq;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="hightop5weekMq", type="integer", nullable=true)
     */
    private $hightop5weekMq;
	
	/**
     * @var integer
	 *
	 * @ORM\Column(name="kingMaster", type="integer", nullable=true)
     */
    private $kingMaster;

	/**
     * @var integer
     *
     * @ORM\Column(name="highScKM", type="integer", nullable=true)
     */
    private $highScKM;	
	
	/**
     * @var integer
     *
     * @ORM\Column(name="highClassKM", type="integer", nullable=true)
     */
    private $highClassKM;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="numHighClassKM", type="integer", nullable=true)
     */
    private $numHighClassKM;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="scofDayMq", type="integer", nullable=true)
     */
    private $scofDayMq;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="highClassDayMq", type="integer", nullable=true)
     */
    private $highClassDayMq;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="numHighClassDayMq", type="integer", nullable=true)
     */
    private $numHighClassDayMq;	
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbQSx", type="integer")
     */
    private $nbQSx;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbBrSx", type="integer")
     */
    private $nbBrSx;

    /**
     * @var integer
     *
     * @ORM\Column(name="prctBrSx", type="decimal", scale=2)
     */
    private $prctBrSx;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbPSx", type="integer")
     */
    private $nbPSx;

    /**
     * @var integer
     *
     * @ORM\Column(name="scTotSx", type="integer")
     */
    private $scTotSx;

    /**
     * @var integer
     *
     * @ORM\Column(name="scMoySx", type="decimal", scale=2)
     */
    private $scMoySx;

    /**
     * @var integer
     *
     * @ORM\Column(name="scMaxSx", type="integer")
     */
    private $scMaxSx;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="scofDaySx", type="integer", nullable=true)
     */
    private $scofDaySx;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbQTv", type="integer")
     */
    private $nbQTv;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbBrTv", type="integer")
     */
    private $nbBrTv;

    /**
     * @var integer
     *
     * @ORM\Column(name="prctBrTv", type="decimal", scale=2)
     */
    private $prctBrTv;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbPTv", type="integer")
     */
    private $nbPTv;

    /**
     * @var integer
     *
     * @ORM\Column(name="scTotTv", type="integer")
     */
    private $scTotTv;

    /**
     * @var integer
     *
     * @ORM\Column(name="scMoyTv", type="decimal", scale=2)
     */
    private $scMoyTv;

    /**
     * @var integer
     *
     * @ORM\Column(name="scMaxTv", type="integer")
     */
    private $scMaxTv;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="scofDayTv", type="integer", nullable=true)
     */
    private $scofDayTv;	
		
	/**
     * @var integer
     *
     * @ORM\Column(name="nbQMu", type="integer")
     */	 
    private $nbQMu;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbBrMu", type="integer")
     */
    private $nbBrMu;

    /**
     * @var integer
     *
     * @ORM\Column(name="prctBrMu", type="decimal", scale=2)
     */
    private $prctBrMu;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbPMu", type="integer")
     */
    private $nbPMu;

    /**
     * @var integer
     *
     * @ORM\Column(name="scTotMu", type="integer")
     */
    private $scTotMu;

    /**
     * @var integer
     *
     * @ORM\Column(name="scMoyMu", type="decimal", scale=2)
     */
    private $scMoyMu;

    /**
     * @var integer
     *
     * @ORM\Column(name="scMaxMu", type="integer")
     */
    private $scMaxMu;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="scofDayMu", type="integer", nullable=true)
     */
    private $scofDayMu;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="highClassDayMu", type="integer", nullable=true)
     */
    private $highClassDayMu;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="numHighClassDayMu", type="integer", nullable=true)
     */
    private $numHighClassDayMu;	
	
	/**
     * @var integer
     *
     * @ORM\Column(name="scofWeekMu", type="integer", nullable=true)
     */
    private $scofWeekMu;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbQFf", type="integer")
     */	 
    private $nbQFf;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbBrFf", type="integer")
     */
    private $nbBrFf;

    /**
     * @var integer
     *
     * @ORM\Column(name="prctBrFf", type="decimal", scale=2)
     */
    private $prctBrFf;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbPFf", type="integer")
     */
    private $nbPFf;

    /**
     * @var integer
     *
     * @ORM\Column(name="scTotFf", type="integer")
     */
    private $scTotFf;

    /**
     * @var integer
     *
     * @ORM\Column(name="scMoyFf", type="decimal", scale=2)
     */
    private $scMoyFf;

    /**
     * @var integer
     *
     * @ORM\Column(name="scMaxFf", type="integer")
     */
    private $scMaxFf;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="scofDayFf", type="integer", nullable=true)
     */
    private $scofDayFf;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="highClassDayFf", type="integer", nullable=true)
     */
    private $highClassDayFf;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="numHighClassDayFf", type="integer", nullable=true)
     */
    private $numHighClassDayFf;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="scofWeekFf", type="integer", nullable=true)
     */
    private $scofWeekFf;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbQAr", type="integer")
     */	 
    private $nbQAr;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbBrAr", type="integer")
     */
    private $nbBrAr;

    /**
     * @var integer
     *
     * @ORM\Column(name="prctBrAr", type="decimal", scale=2)
     */
    private $prctBrAr;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbPAr", type="integer")
     */
    private $nbPAr;

    /**
     * @var integer
     *
     * @ORM\Column(name="scTotAr", type="integer")
     */
    private $scTotAr;

    /**
     * @var integer
     *
     * @ORM\Column(name="scMoyAr", type="decimal", scale=2)
     */
    private $scMoyAr;

    /**
     * @var integer
     *
     * @ORM\Column(name="scMaxAr", type="integer")
     */
    private $scMaxAr;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="scofDayAr", type="integer", nullable=true)
     */
    private $scofDayAr;

	/**
     * @var integer
     *
     * @ORM\Column(name="highClassDayAr", type="integer", nullable=true)
     */
    private $highClassDayAr;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="numHighClassDayAr", type="integer", nullable=true)
     */
    private $numHighClassDayAr;	
	
	/**
     * @var integer
     *
     * @ORM\Column(name="scofWeekAr", type="integer", nullable=true)
     */
    private $scofWeekAr;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbQLx", type="integer")
     */	 
    private $nbQLx;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbBrLx", type="integer")
     */
    private $nbBrLx;

    /**
     * @var integer
     *
     * @ORM\Column(name="prctBrLx", type="decimal", scale=2)
     */
    private $prctBrLx;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbPLx", type="integer")
     */
    private $nbPLx;

    /**
     * @var integer
     *
     * @ORM\Column(name="scTotLx", type="integer")
     */
    private $scTotLx;

    /**
     * @var integer
     *
     * @ORM\Column(name="scMoyLx", type="decimal", scale=2)
     */
    private $scMoyLx;

    /**
     * @var integer
     *
     * @ORM\Column(name="scMaxLx", type="integer")
     */
    private $scMaxLx;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="scofDayLx", type="integer", nullable=true)
     */
    private $scofDayLx;
	
		/**
     * @var integer
     *
     * @ORM\Column(name="highClassDayLx", type="integer", nullable=true)
     */
    private $highClassDayLx;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="numHighClassDayLx", type="integer", nullable=true)
     */
    private $numHighClassDayLx;	
	
	/**
     * @var integer
     *
     * @ORM\Column(name="scofWeekLx", type="integer", nullable=true)
     */
    private $scofWeekLx;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="scofDayTM", type="integer", nullable=true)
     */
    private $scofDayTM;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="scMaxTM", type="integer", nullable=true)
     */
    private $scMaxTM;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="highClassDayTM", type="integer", nullable=true)
     */
    private $highClassDayTM;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="numHighClassDayTM", type="integer", nullable=true)
     */
    private $numHighClassDayTM;	
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbErrorSignalTot", type="integer")
     */
    private $nbErrorSignalTot;	
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbErrorSignal", type="integer")
     */
    private $nbErrorSignal;
	
	/**
	* @ORM\ManyToMany(targetEntity="MDQ\QuestionBundle\Entity\Question", mappedBy="users_error", cascade={"persist"})
	* @ORM\JoinColumn(nullable=true)
	*/
	private $questions_error;
	
	/**
	* @ORM\OneToMany(targetEntity="MDQ\QuestionBundle\Entity\QaValider",mappedBy="auteur")
	*/
	private $qavaliders;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbQprop", type="integer")
     */
    private $nbQprop;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbQvalid", type="integer")
     */
    private $nbQvalid;
	
	/**
     * @var array
	 *
	 * @ORM\Column(name="tabCoefBot", type="array", nullable=true)
     */
    private $tabCoefBot;
    
	
	/**
	* @ORM\OneToOne(targetEntity="MDQ\UserBundle\Entity\User", mappedBy="scUser", cascade={"persist"})
	*/
	private $usermap;
	
	/**
	* @ORM\OneToOne(targetEntity="MDQ\UserBundle\Entity\Medailles", cascade={"persist"})
	*/
	private $medailles;


	public function __construct()
	{
	$this->nbJMq=0;
	$this->nbJdayMq=10;
	$this->nbJQnF=0;
	$this->nbJdayQnF=0;
	$this->nbBrtot = 0;
	$this->nbPtot = 0;
	$this->nbPMq = 0;
	$this->scTotMq = 0;
	$this->scMoyMq = 0;	
	$this->scMaxMq = 0;	
	$this->datescMaxMq = null;
	$this->nbQtotMq = 0;
	$this->nbBrtotMq = 0;	
	$this->prctBrtotMq = 0;
	$this->nbQhMq = 0;
	$this->nbBrhMq = 0;	
	$this->prctBrhMq = 0;
	$this->nbQgMq = 0;
	$this->nbBrgMq = 0;	
	$this->prctBrgMq = 0;
	$this->nbQdMq = 0;
	$this->nbBrdMq = 0;	
	$this->prctBrdMq = 0;
	$this->nbQalMq = 0;
	$this->nbBralMq = 0;	
	$this->prctBralMq = 0;
	$this->nbQslMq = 0;
	$this->nbBrslMq = 0;	
	$this->prctBrslMq = 0;
	$this->nbQsnMq = 0;
	$this->nbBrsnMq = 0;	
	$this->prctBrsnMq = 0;
	$this->nbPSx = 0;
	$this->scTotSx = 0;
	$this->scMoySx = 0;	
	$this->scMaxSx = 0;	
	$this->nbQSx = 0;
	$this->nbBrSx = 0;	
	$this->prctBrSx = 0;
	$this->nbPTv = 0;
	$this->scTotTv = 0;
	$this->scMoyTv = 0;	
	$this->scMaxTv = 0;
	$this->nbQTv = 0;
	$this->nbBrTv = 0;	
	$this->prctBrTv = 0;
	$this->nbPMu = 0;
	$this->scTotMu = 0;
	$this->scMoyMu = 0;	
	$this->scMaxMu = 0;
	$this->nbQMu = 0;
	$this->nbBrMu = 0;	
	$this->prctBrMu = 0;
	$this->nbPFf = 0;
	$this->scTotFf = 0;
	$this->scMoyFf = 0;	
	$this->scMaxFf = 0;
	$this->nbQFf = 0;
	$this->nbBrFf = 0;	
	$this->prctBrFf = 0;
	$this->nbPAr = 0;
	$this->scTotAr = 0;
	$this->scMoyAr = 0;	
	$this->scMaxAr = 0;
	$this->nbQAr = 0;
	$this->nbBrAr = 0;	
	$this->prctBrAr = 0;
	$this->nbPLx = 0;
	$this->scTotLx = 0;
	$this->scMoyLx = 0;	
	$this->scMaxLx = 0;
	$this->nbQLx = 0;
	$this->nbBrLx = 0;	
	$this->prctBrLx = 0;
	$this->top10month=[0,0,0,0,0,0,0,0,0,0];
	$this->sumtop10month=Null;
	$this->top5weekMq=[0,0,0,0,0];
	$this->sumtop5weekMq=null;	
	$this->scMaxTM = 0;	
	$this->nbErrorSignalTot=0;
	$this->nbErrorSignal=0;
	$this->questions_error=new ArrayCollection();
	$this->tabCoefBot=Null;
	$this->qavaliders = new\Doctrine\Common\Collections\ArrayCollection();
	$this->nbQprop=0;
	$this->nbQvalid=0;
	$this->medailles = new Medailles();
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
     * Set nbPMq
     *
     * @param integer $nbPMq
     * @return ScUser
     */
    public function setNbPMq($nbPMq)
    {
        $this->nbPMq = $nbPMq;

        return $this;
    }

    /**
     * Get nbPMq
     *
     * @return integer 
     */
    public function getNbPMq()
    {
        return $this->nbPMq;
    }

    /**
     * Set scTotMq
     *
     * @param integer $scTotMq
     * @return ScUser
     */
    public function setScTotMq($scTotMq)
    {
        $this->scTotMq = $scTotMq;

        return $this;
    }

    /**
     * Get scTotMq
     *
     * @return integer 
     */
    public function getScTotMq()
    {
        return $this->scTotMq;
    }

    /**
     * Set scMoyMq
     *
     * @param integer $scMoyMq
     * @return ScUser
     */
    public function setScMoyMq($scMoyMq)
    {
        $this->scMoyMq = $scMoyMq;

        return $this;
    }

    /**
     * Get scMoyMq
     *
     * @return integer 
     */
    public function getScMoyMq()
    {
        return $this->scMoyMq;
    }

    /**
     * Set scMaxMq
     *
     * @param integer $scMaxMq
     * @return ScUser
     */
    public function setScMaxMq($scMaxMq)
    {
        $this->scMaxMq = $scMaxMq;

        return $this;
    }

    /**
     * Get scMaxMq
     *
     * @return integer 
     */
    public function getScMaxMq()
    {
        return $this->scMaxMq;
    }

    /**
     * Set datescMaxMq
     *
     * @param \DateTime $datescMaxMq
     * @return ScUser
     */
    public function setDatescMaxMq($datescMaxMq)
    {
        $this->datescMaxMq = $datescMaxMq;

        return $this;
    }

    /**
     * Get datescMaxMq
     *
     * @return \DateTime 
     */
    public function getDatescMaxMq()
    {
        return $this->datescMaxMq;
    }

    /**
     * Set nbQtotMq
     *
     * @param integer $nbQtotMq
     * @return ScUser
     */
    public function setNbQtotMq($nbQtotMq)
    {
        $this->nbQtotMq = $nbQtotMq;

        return $this;
    }

    /**
     * Get nbQtotMq
     *
     * @return integer 
     */
    public function getNbQtotMq()
    {
        return $this->nbQtotMq;
    }

    /**
     * Set nbBrtotMq
     *
     * @param integer $nbBrtotMq
     * @return ScUser
     */
    public function setNbBrtotMq($nbBrtotMq)
    {
        $this->nbBrtotMq = $nbBrtotMq;

        return $this;
    }

    /**
     * Get nbBrtotMq
     *
     * @return integer 
     */
    public function getNbBrtotMq()
    {
        return $this->nbBrtotMq;
    }

    /**
     * Set prctBrtotMq
     *
     * @param integer $prctBrtotMq
     * @return ScUser
     */
    public function setPrctBrtotMq($prctBrtotMq)
    {
        $this->prctBrtotMq = $prctBrtotMq;

        return $this;
    }

    /**
     * Get prctBrtotMq
     *
     * @return integer 
     */
    public function getPrctBrtotMq()
    {
        return $this->prctBrtotMq;
    }

    /**
     * Set nbQhMq
     *
     * @param integer $nbQhMq
     * @return ScUser
     */
    public function setNbQhMq($nbQhMq)
    {
        $this->nbQhMq = $nbQhMq;

        return $this;
    }

    /**
     * Get nbQhMq
     *
     * @return integer 
     */
    public function getNbQhMq()
    {
        return $this->nbQhMq;
    }

    /**
     * Set nbBrhMq
     *
     * @param integer $nbBrhMq
     * @return ScUser
     */
    public function setNbBrhMq($nbBrhMq)
    {
        $this->nbBrhMq = $nbBrhMq;

        return $this;
    }

    /**
     * Get nbBrhMq
     *
     * @return integer 
     */
    public function getNbBrhMq()
    {
        return $this->nbBrhMq;
    }

    /**
     * Set prctBrhMq
     *
     * @param integer $prctBrhMq
     * @return ScUser
     */
    public function setPrctBrhMq($prctBrhMq)
    {
        $this->prctBrhMq = $prctBrhMq;

        return $this;
    }

    /**
     * Get prctBrhMq
     *
     * @return integer 
     */
    public function getPrctBrhMq()
    {
        return $this->prctBrhMq;
    }

    /**
     * Set nbQgMq
     *
     * @param integer $nbQgMq
     * @return ScUser
     */
    public function setNbQgMq($nbQgMq)
    {
        $this->nbQgMq = $nbQgMq;

        return $this;
    }

    /**
     * Get nbQgMq
     *
     * @return integer 
     */
    public function getNbQgMq()
    {
        return $this->nbQgMq;
    }

    /**
     * Set nbBrgMq
     *
     * @param integer $nbBrgMq
     * @return ScUser
     */
    public function setNbBrgMq($nbBrgMq)
    {
        $this->nbBrgMq = $nbBrgMq;

        return $this;
    }

    /**
     * Get nbBrgMq
     *
     * @return integer 
     */
    public function getNbBrgMq()
    {
        return $this->nbBrgMq;
    }

    /**
     * Set prctBrgMq
     *
     * @param integer $prctBrgMq
     * @return ScUser
     */
    public function setPrctBrgMq($prctBrgMq)
    {
        $this->prctBrgMq = $prctBrgMq;

        return $this;
    }

    /**
     * Get prctBrgMq
     *
     * @return integer 
     */
    public function getPrctBrgMq()
    {
        return $this->prctBrgMq;
    }

    /**
     * Set nbQdMq
     *
     * @param integer $nbQdMq
     * @return ScUser
     */
    public function setNbQdMq($nbQdMq)
    {
        $this->nbQdMq = $nbQdMq;

        return $this;
    }

    /**
     * Get nbQdMq
     *
     * @return integer 
     */
    public function getNbQdMq()
    {
        return $this->nbQdMq;
    }

    /**
     * Set nbBrdMq
     *
     * @param integer $nbBrdMq
     * @return ScUser
     */
    public function setNbBrdMq($nbBrdMq)
    {
        $this->nbBrdMq = $nbBrdMq;

        return $this;
    }

    /**
     * Get nbBrdMq
     *
     * @return integer 
     */
    public function getNbBrdMq()
    {
        return $this->nbBrdMq;
    }

    /**
     * Set prctBrdMq
     *
     * @param integer $prctBrdMq
     * @return ScUser
     */
    public function setPrctBrdMq($prctBrdMq)
    {
        $this->prctBrdMq = $prctBrdMq;

        return $this;
    }

    /**
     * Get prctBrdMq
     *
     * @return integer 
     */
    public function getPrctBrdMq()
    {
        return $this->prctBrdMq;
    }

    /**
     * Set nbQalMq
     *
     * @param integer $nbQalMq
     * @return ScUser
     */
    public function setNbQalMq($nbQalMq)
    {
        $this->nbQalMq = $nbQalMq;

        return $this;
    }

    /**
     * Get nbQalMq
     *
     * @return integer 
     */
    public function getNbQalMq()
    {
        return $this->nbQalMq;
    }

    /**
     * Set nbBralMq
     *
     * @param integer $nbBralMq
     * @return ScUser
     */
    public function setNbBralMq($nbBralMq)
    {
        $this->nbBralMq = $nbBralMq;

        return $this;
    }

    /**
     * Get nbBralMq
     *
     * @return integer 
     */
    public function getNbBralMq()
    {
        return $this->nbBralMq;
    }

    /**
     * Set prctBralMq
     *
     * @param integer $prctBralMq
     * @return ScUser
     */
    public function setPrctBralMq($prctBralMq)
    {
        $this->prctBralMq = $prctBralMq;

        return $this;
    }

    /**
     * Get prctBralMq
     *
     * @return integer 
     */
    public function getPrctBralMq()
    {
        return $this->prctBralMq;
    }

    /**
     * Set nbQslMq
     *
     * @param integer $nbQslMq
     * @return ScUser
     */
    public function setNbQslMq($nbQslMq)
    {
        $this->nbQslMq = $nbQslMq;

        return $this;
    }

    /**
     * Get nbQslMq
     *
     * @return integer 
     */
    public function getNbQslMq()
    {
        return $this->nbQslMq;
    }

    /**
     * Set nbBrslMq
     *
     * @param integer $nbBrslMq
     * @return ScUser
     */
    public function setNbBrslMq($nbBrslMq)
    {
        $this->nbBrslMq = $nbBrslMq;

        return $this;
    }

    /**
     * Get nbBrslMq
     *
     * @return integer 
     */
    public function getNbBrslMq()
    {
        return $this->nbBrslMq;
    }

    /**
     * Set prctBrslMq
     *
     * @param integer $prctBrslMq
     * @return ScUser
     */
    public function setPrctBrslMq($prctBrslMq)
    {
        $this->prctBrslMq = $prctBrslMq;

        return $this;
    }

    /**
     * Get prctBrslMq
     *
     * @return integer 
     */
    public function getPrctBrslMq()
    {
        return $this->prctBrslMq;
    }

    /**
     * Set nbQsnMq
     *
     * @param integer $nbQsnMq
     * @return ScUser
     */
    public function setNbQsnMq($nbQsnMq)
    {
        $this->nbQsnMq = $nbQsnMq;

        return $this;
    }

    /**
     * Get nbQsnMq
     *
     * @return integer 
     */
    public function getNbQsnMq()
    {
        return $this->nbQsnMq;
    }

    /**
     * Set nbBrsnMq
     *
     * @param integer $nbBrsnMq
     * @return ScUser
     */
    public function setNbBrsnMq($nbBrsnMq)
    {
        $this->nbBrsnMq = $nbBrsnMq;

        return $this;
    }

    /**
     * Get nbBrsnMq
     *
     * @return integer 
     */
    public function getNbBrsnMq()
    {
        return $this->nbBrsnMq;
    }

    /**
     * Set prctBrsnMq
     *
     * @param integer $prctBrsnMq
     * @return ScUser
     */
    public function setPrctBrsnMq($prctBrsnMq)
    {
        $this->prctBrsnMq = $prctBrsnMq;

        return $this;
    }

    /**
     * Get prctBrsnMq
     *
     * @return integer 
     */
    public function getPrctBrsnMq()
    {
        return $this->prctBrsnMq;
    }



    /**
     * Set top10month
     *
     * @param array $top10month
     * @return ScUser
     */
    public function setTop10month($top10month)
    {
        $this->top10month = $top10month;

        return $this;
    }

    /**
     * Get top10month
     *
     * @return array 
     */
    public function getTop10month()
    {
        return $this->top10month;
    }

    /**
     * Set sumtop10month
     *
     * @param integer $sumtop10month
     * @return ScUser
     */
    public function setSumtop10month($sumtop10month)
    {
        $this->sumtop10month = $sumtop10month;

        return $this;
    }

    /**
     * Get sumtop10month
     *
     * @return integer 
     */
    public function getSumtop10month()
    {
        return $this->sumtop10month;
    }

    /**
     * Set usermap
     *
     * @param \MDQ\UserBundle\Entity\User $usermap
     * @return ScUser
     */
    public function setUsermap(\MDQ\UserBundle\Entity\User $usermap = null)
    {
        $this->usermap = $usermap;

        return $this;
    }

    /**
     * Get usermap
     *
     * @return \MDQ\UserBundle\Entity\User 
     */
    public function getUsermap()
    {
        return $this->usermap;
    }



    


    /**
     * Set monthHighScMq
     *
     * @param integer $monthHighScMq
     * @return ScUser
     */
    public function setMonthHighScMq($monthHighScMq)
    {
        $this->monthHighScMq = $monthHighScMq;

        return $this;
    }

    /**
     * Get monthHighScMq
     *
     * @return integer 
     */
    public function getMonthHighScMq()
    {
        return $this->monthHighScMq;
    }

    /**
     * Set scofDayMq
     *
     * @param integer $scofDayMq
     * @return ScUser
     */
    public function setScofDayMq($scofDayMq)
    {
        $this->scofDayMq = $scofDayMq;

        return $this;
    }

    /**
     * Get scofDayMq
     *
     * @return integer 
     */
    public function getScofDayMq()
    {
        return $this->scofDayMq;
    }

    /**
     * Set highClassDayMq
     *
     * @param integer $highClassDayMq
     * @return ScUser
     */
    public function setHighClassDayMq($highClassDayMq)
    {
        $this->highClassDayMq = $highClassDayMq;

        return $this;
    }

    /**
     * Get highClassDayMq
     *
     * @return integer 
     */
    public function getHighClassDayMq()
    {
        return $this->highClassDayMq;
    }

    /**
     * Set numHighClassDayMq
     *
     * @param integer $numHighClassDayMq
     * @return ScUser
     */
    public function setNumHighClassDayMq($numHighClassDayMq)
    {
        $this->numHighClassDayMq = $numHighClassDayMq;

        return $this;
    }

    /**
     * Get numHighClassDayMq
     *
     * @return integer 
     */
    public function getNumHighClassDayMq()
    {
        return $this->numHighClassDayMq;
    }

    /**
     * Set highClassMonthMq
     *
     * @param integer $highClassMonthMq
     * @return ScUser
     */
    public function setHighClassMonthMq($highClassMonthMq)
    {
        $this->highClassMonthMq = $highClassMonthMq;

        return $this;
    }

    /**
     * Get highClassMonthMq
     *
     * @return integer 
     */
    public function getHighClassMonthMq()
    {
        return $this->highClassMonthMq;
    }

    /**
     * Set numHighClassMonthMq
     *
     * @param integer $numHighClassMonthMq
     * @return ScUser
     */
    public function setNumHighClassMonthMq($numHighClassMonthMq)
    {
        $this->numHighClassMonthMq = $numHighClassMonthMq;

        return $this;
    }

    /**
     * Get numHighClassMonthMq
     *
     * @return integer 
     */
    public function getNumHighClassMonthMq()
    {
        return $this->numHighClassMonthMq;
    }

    /**
     * Set tabCoefBot
     *
     * @param array $tabCoefBot
     * @return ScUser
     */
    public function setTabCoefBot($tabCoefBot)
    {
        $this->tabCoefBot = $tabCoefBot;

        return $this;
    }

    /**
     * Get tabCoefBot
     *
     * @return array 
     */
    public function getTabCoefBot()
    {
        return $this->tabCoefBot;
    }

    
    /**
     * Set nbErrorSignalTot
     *
     * @param integer $nbErrorSignalTot
     * @return ScUser
     */
    public function setNbErrorSignalTot($nbErrorSignalTot)
    {
        $this->nbErrorSignalTot = $nbErrorSignalTot;

        return $this;
    }

    /**
     * Get nbErrorSignalTot
     *
     * @return integer 
     */
    public function getNbErrorSignalTot()
    {
        return $this->nbErrorSignalTot;
    }

    /**
     * Set nbErrorSignal
     *
     * @param integer $nbErrorSignal
     * @return ScUser
     */
    public function setNbErrorSignal($nbErrorSignal)
    {
        $this->nbErrorSignal = $nbErrorSignal;

        return $this;
    }

    /**
     * Get nbErrorSignal
     *
     * @return integer 
     */
    public function getNbErrorSignal()
    {
        return $this->nbErrorSignal;
    }

    /**
     * Add questions_error
     *
     * @param \MDQ\QuestionBundle\Entity\Question $questionsError
     * @return ScUser
     */
    public function addQuestion_error(\MDQ\QuestionBundle\Entity\Question $questionsError)
    {
        $this->questions_error[] = $questionsError;

        return $this;
    }

    /**
     * Remove questions_error
     *
     * @param \MDQ\QuestionBundle\Entity\Question $questionsError
     */
    public function removeQuestion_error(\MDQ\QuestionBundle\Entity\Question $questionsError)
    {
        $this->questions_error->removeElement($questionsError);
    }

    /**
     * Get questions_error
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestions_error()
    {
        return $this->questions_error;
    }

    /**
     * Add questions_error
     *
     * @param \MDQ\QuestionBundle\Entity\Question $questionsError
     * @return ScUser
     */
    public function addQuestionsError(\MDQ\QuestionBundle\Entity\Question $questionsError)
    {
        $this->questions_error[] = $questionsError;

        return $this;
    }

    /**
     * Remove questions_error
     *
     * @param \MDQ\QuestionBundle\Entity\Question $questionsError
     */
    public function removeQuestionsError(\MDQ\QuestionBundle\Entity\Question $questionsError)
    {
        $this->questions_error->removeElement($questionsError);
    }

    /**
     * Get questions_error
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestionsError()
    {
        return $this->questions_error;
    }

    /**
     * Add qavaliders
     *
     * @param \MDQ\QuestionBundle\Entity\QaValider $qavaliders
     * @return ScUser
     */
    public function addQavalider(\MDQ\QuestionBundle\Entity\QaValider $qavalider)
    {
        $this->qavaliders[] = $qavalider;
		$qavalider->setAuteur($this);
        return $this;
    }

    /**
     * Remove qavaliders
     *
     * @param \MDQ\QuestionBundle\Entity\QaValider $qavaliders
     */
    public function removeQavalider(\MDQ\QuestionBundle\Entity\QaValider $qavalider)
    {
        $this->qavaliders->removeElement($qavalider);
		
    }

    /**
     * Get qavaliders
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQavaliders()
    {
        return $this->qavaliders;
    }

    /**
     * Set nbQprop
     *
     * @param integer $nbQprop
     * @return ScUser
     */
    public function setNbQprop($nbQprop)
    {
        $this->nbQprop = $nbQprop;

        return $this;
    }

    /**
     * Get nbQprop
     *
     * @return integer 
     */
    public function getNbQprop()
    {
        return $this->nbQprop;
    }

    /**
     * Set nbQvalid
     *
     * @param integer $nbQvalid
     * @return ScUser
     */
    public function setNbQvalid($nbQvalid)
    {
        $this->nbQvalid = $nbQvalid;

        return $this;
    }

    /**
     * Get nbQvalid
     *
     * @return integer 
     */
    public function getNbQvalid()
    {
        return $this->nbQvalid;
    }

    /**
     * Set nbQSx
     *
     * @param integer $nbQSx
     * @return ScUser
     */
    public function setNbQSx($nbQSx)
    {
        $this->nbQSx = $nbQSx;

        return $this;
    }

    /**
     * Get nbQSx
     *
     * @return integer 
     */
    public function getNbQSx()
    {
        return $this->nbQSx;
    }

    /**
     * Set nbBrSx
     *
     * @param integer $nbBrSx
     * @return ScUser
     */
    public function setNbBrSx($nbBrSx)
    {
        $this->nbBrSx = $nbBrSx;

        return $this;
    }

    /**
     * Get nbBrSx
     *
     * @return integer 
     */
    public function getNbBrSx()
    {
        return $this->nbBrSx;
    }

    /**
     * Set prctBrSx
     *
     * @param string $prctBrSx
     * @return ScUser
     */
    public function setPrctBrSx($prctBrSx)
    {
        $this->prctBrSx = $prctBrSx;

        return $this;
    }

    /**
     * Get prctBrSx
     *
     * @return string 
     */
    public function getPrctBrSx()
    {
        return $this->prctBrSx;
    }

    /**
     * Set nbPSx
     *
     * @param integer $nbPSx
     * @return ScUser
     */
    public function setNbPSx($nbPSx)
    {
        $this->nbPSx = $nbPSx;

        return $this;
    }

    /**
     * Get nbPSx
     *
     * @return integer 
     */
    public function getNbPSx()
    {
        return $this->nbPSx;
    }

    /**
     * Set scTotSx
     *
     * @param integer $scTotSx
     * @return ScUser
     */
    public function setScTotSx($scTotSx)
    {
        $this->scTotSx = $scTotSx;

        return $this;
    }

    /**
     * Get scTotSx
     *
     * @return integer 
     */
    public function getScTotSx()
    {
        return $this->scTotSx;
    }

    /**
     * Set scMoySx
     *
     * @param string $scMoySx
     * @return ScUser
     */
    public function setScMoySx($scMoySx)
    {
        $this->scMoySx = $scMoySx;

        return $this;
    }

    /**
     * Get scMoySx
     *
     * @return string 
     */
    public function getScMoySx()
    {
        return $this->scMoySx;
    }

    /**
     * Set scMaxSx
     *
     * @param integer $scMaxSx
     * @return ScUser
     */
    public function setScMaxSx($scMaxSx)
    {
        $this->scMaxSx = $scMaxSx;

        return $this;
    }

    /**
     * Get scMaxSx
     *
     * @return integer 
     */
    public function getScMaxSx()
    {
        return $this->scMaxSx;
    }

    /**
     * Set scofDaySx
     *
     * @param integer $scofDaySx
     * @return ScUser
     */
    public function setScofDaySx($scofDaySx)
    {
        $this->scofDaySx = $scofDaySx;

        return $this;
    }

    /**
     * Get scofDaySx
     *
     * @return integer 
     */
    public function getScofDaySx()
    {
        return $this->scofDaySx;
    }

    /**
     * Set nbQTv
     *
     * @param integer $nbQTv
     * @return ScUser
     */
    public function setNbQTv($nbQTv)
    {
        $this->nbQTv = $nbQTv;

        return $this;
    }

    /**
     * Get nbQTv
     *
     * @return integer 
     */
    public function getNbQTv()
    {
        return $this->nbQTv;
    }

    /**
     * Set nbBrTv
     *
     * @param integer $nbBrTv
     * @return ScUser
     */
    public function setNbBrTv($nbBrTv)
    {
        $this->nbBrTv = $nbBrTv;

        return $this;
    }

    /**
     * Get nbBrTv
     *
     * @return integer 
     */
    public function getNbBrTv()
    {
        return $this->nbBrTv;
    }

    /**
     * Set prctBrTv
     *
     * @param string $prctBrTv
     * @return ScUser
     */
    public function setPrctBrTv($prctBrTv)
    {
        $this->prctBrTv = $prctBrTv;

        return $this;
    }

    /**
     * Get prctBrTv
     *
     * @return string 
     */
    public function getPrctBrTv()
    {
        return $this->prctBrTv;
    }

    /**
     * Set nbPTv
     *
     * @param integer $nbPTv
     * @return ScUser
     */
    public function setNbPTv($nbPTv)
    {
        $this->nbPTv = $nbPTv;

        return $this;
    }

    /**
     * Get nbPTv
     *
     * @return integer 
     */
    public function getNbPTv()
    {
        return $this->nbPTv;
    }

    /**
     * Set scTotTv
     *
     * @param integer $scTotTv
     * @return ScUser
     */
    public function setScTotTv($scTotTv)
    {
        $this->scTotTv = $scTotTv;

        return $this;
    }

    /**
     * Get scTotTv
     *
     * @return integer 
     */
    public function getScTotTv()
    {
        return $this->scTotTv;
    }

    /**
     * Set scMoyTv
     *
     * @param string $scMoyTv
     * @return ScUser
     */
    public function setScMoyTv($scMoyTv)
    {
        $this->scMoyTv = $scMoyTv;

        return $this;
    }

    /**
     * Get scMoyTv
     *
     * @return string 
     */
    public function getScMoyTv()
    {
        return $this->scMoyTv;
    }

    /**
     * Set scMaxTv
     *
     * @param integer $scMaxTv
     * @return ScUser
     */
    public function setScMaxTv($scMaxTv)
    {
        $this->scMaxTv = $scMaxTv;

        return $this;
    }

    /**
     * Get scMaxTv
     *
     * @return integer 
     */
    public function getScMaxTv()
    {
        return $this->scMaxTv;
    }

    /**
     * Set scofDayTv
     *
     * @param integer $scofDayTv
     * @return ScUser
     */
    public function setScofDayTv($scofDayTv)
    {
        $this->scofDayTv = $scofDayTv;

        return $this;
    }

    /**
     * Get scofDayTv
     *
     * @return integer 
     */
    public function getScofDayTv()
    {
        return $this->scofDayTv;
    }


    /**
     * Set nbJMq
     *
     * @param integer $nbJMq
     * @return ScUser
     */
    public function setNbJMq($nbJMq)
    {
        $this->nbJMq = $nbJMq;

        return $this;
    }

    /**
     * Get nbJMq
     *
     * @return integer 
     */
    public function getNbJMq()
    {
        return $this->nbJMq;
    }

    /**
     * Set nbJdayMq
     *
     * @param integer $nbJdayMq
     * @return ScUser
     */
    public function setNbJdayMq($nbJdayMq)
    {
        $this->nbJdayMq = $nbJdayMq;

        return $this;
    }

    /**
     * Get nbJdayMq
     *
     * @return integer 
     */
    public function getNbJdayMq()
    {
        return $this->nbJdayMq;
    }

    /**
     * Set nbJQnF
     *
     * @param integer $nbJQnF
     * @return ScUser
     */
    public function setNbJQnF($nbJQnF)
    {
        $this->nbJQnF = $nbJQnF;

        return $this;
    }

    /**
     * Get nbJQnF
     *
     * @return integer 
     */
    public function getNbJQnF()
    {
        return $this->nbJQnF;
    }

    /**
     * Set nbJdayQnF
     *
     * @param integer $nbJdayQnF
     * @return ScUser
     */
    public function setNbJdayQnF($nbJdayQnF)
    {
        $this->nbJdayQnF = $nbJdayQnF;

        return $this;
    }

    /**
     * Get nbJdayQnF
     *
     * @return integer 
     */
    public function getNbJdayQnF()
    {
        return $this->nbJdayQnF;
    }

    /**
     * Set top5weekMq
     *
     * @param array $top5weekMq
     * @return ScUser
     */
    public function setTop5weekMq($top5weekMq)
    {
        $this->top5weekMq = $top5weekMq;

        return $this;
    }

    /**
     * Get top5weekMq
     *
     * @return array 
     */
    public function getTop5weekMq()
    {
        return $this->top5weekMq;
    }

    /**
     * Set sumtop5weekMq
     *
     * @param integer $sumtop5weekMq
     * @return ScUser
     */
    public function setSumtop5weekMq($sumtop5weekMq)
    {
        $this->sumtop5weekMq = $sumtop5weekMq;

        return $this;
    }

    /**
     * Get sumtop5weekMq
     *
     * @return integer 
     */
    public function getSumtop5weekMq()
    {
        return $this->sumtop5weekMq;
    }

    /**
     * Set hightop5weekMq
     *
     * @param integer $hightop5weekMq
     * @return ScUser
     */
    public function setHightop5weekMq($hightop5weekMq)
    {
        $this->hightop5weekMq = $hightop5weekMq;

        return $this;
    }

    /**
     * Get hightop5weekMq
     *
     * @return integer 
     */
    public function getHightop5weekMq()
    {
        return $this->hightop5weekMq;
    }

  

    /**
     * Set nbQMu
     *
     * @param integer $nbQMu
     * @return ScUser
     */
    public function setNbQMu($nbQMu)
    {
        $this->nbQMu = $nbQMu;

        return $this;
    }

    /**
     * Get nbQMu
     *
     * @return integer 
     */
    public function getNbQMu()
    {
        return $this->nbQMu;
    }

    /**
     * Set nbBrMu
     *
     * @param integer $nbBrMu
     * @return ScUser
     */
    public function setNbBrMu($nbBrMu)
    {
        $this->nbBrMu = $nbBrMu;

        return $this;
    }

    /**
     * Get nbBrMu
     *
     * @return integer 
     */
    public function getNbBrMu()
    {
        return $this->nbBrMu;
    }

    /**
     * Set prctBrMu
     *
     * @param string $prctBrMu
     * @return ScUser
     */
    public function setPrctBrMu($prctBrMu)
    {
        $this->prctBrMu = $prctBrMu;

        return $this;
    }

    /**
     * Get prctBrMu
     *
     * @return string 
     */
    public function getPrctBrMu()
    {
        return $this->prctBrMu;
    }

    /**
     * Set nbPMu
     *
     * @param integer $nbPMu
     * @return ScUser
     */
    public function setNbPMu($nbPMu)
    {
        $this->nbPMu = $nbPMu;

        return $this;
    }

    /**
     * Get nbPMu
     *
     * @return integer 
     */
    public function getNbPMu()
    {
        return $this->nbPMu;
    }

    /**
     * Set scTotMu
     *
     * @param integer $scTotMu
     * @return ScUser
     */
    public function setScTotMu($scTotMu)
    {
        $this->scTotMu = $scTotMu;

        return $this;
    }

    /**
     * Get scTotMu
     *
     * @return integer 
     */
    public function getScTotMu()
    {
        return $this->scTotMu;
    }

    /**
     * Set scMoyMu
     *
     * @param string $scMoyMu
     * @return ScUser
     */
    public function setScMoyMu($scMoyMu)
    {
        $this->scMoyMu = $scMoyMu;

        return $this;
    }

    /**
     * Get scMoyMu
     *
     * @return string 
     */
    public function getScMoyMu()
    {
        return $this->scMoyMu;
    }

    /**
     * Set scMaxMu
     *
     * @param integer $scMaxMu
     * @return ScUser
     */
    public function setScMaxMu($scMaxMu)
    {
        $this->scMaxMu = $scMaxMu;

        return $this;
    }

    /**
     * Get scMaxMu
     *
     * @return integer 
     */
    public function getScMaxMu()
    {
        return $this->scMaxMu;
    }

    /**
     * Set scofDayMu
     *
     * @param integer $scofDayMu
     * @return ScUser
     */
    public function setScofDayMu($scofDayMu)
    {
        $this->scofDayMu = $scofDayMu;

        return $this;
    }

    /**
     * Get scofDayMu
     *
     * @return integer 
     */
    public function getScofDayMu()
    {
        return $this->scofDayMu;
    }

    /**
     * Set nbQFf
     *
     * @param integer $nbQFf
     * @return ScUser
     */
    public function setNbQFf($nbQFf)
    {
        $this->nbQFf = $nbQFf;

        return $this;
    }

    /**
     * Get nbQFf
     *
     * @return integer 
     */
    public function getNbQFf()
    {
        return $this->nbQFf;
    }

    /**
     * Set nbBrFf
     *
     * @param integer $nbBrFf
     * @return ScUser
     */
    public function setNbBrFf($nbBrFf)
    {
        $this->nbBrFf = $nbBrFf;

        return $this;
    }

    /**
     * Get nbBrFf
     *
     * @return integer 
     */
    public function getNbBrFf()
    {
        return $this->nbBrFf;
    }

    /**
     * Set prctBrFf
     *
     * @param string $prctBrFf
     * @return ScUser
     */
    public function setPrctBrFf($prctBrFf)
    {
        $this->prctBrFf = $prctBrFf;

        return $this;
    }

    /**
     * Get prctBrFf
     *
     * @return string 
     */
    public function getPrctBrFf()
    {
        return $this->prctBrFf;
    }

    /**
     * Set nbPFf
     *
     * @param integer $nbPFf
     * @return ScUser
     */
    public function setNbPFf($nbPFf)
    {
        $this->nbPFf = $nbPFf;

        return $this;
    }

    /**
     * Get nbPFf
     *
     * @return integer 
     */
    public function getNbPFf()
    {
        return $this->nbPFf;
    }

    /**
     * Set scTotFf
     *
     * @param integer $scTotFf
     * @return ScUser
     */
    public function setScTotFf($scTotFf)
    {
        $this->scTotFf = $scTotFf;

        return $this;
    }

    /**
     * Get scTotFf
     *
     * @return integer 
     */
    public function getScTotFf()
    {
        return $this->scTotFf;
    }

    /**
     * Set scMoyFf
     *
     * @param string $scMoyFf
     * @return ScUser
     */
    public function setScMoyFf($scMoyFf)
    {
        $this->scMoyFf = $scMoyFf;

        return $this;
    }

    /**
     * Get scMoyFf
     *
     * @return string 
     */
    public function getScMoyFf()
    {
        return $this->scMoyFf;
    }

    /**
     * Set scMaxFf
     *
     * @param integer $scMaxFf
     * @return ScUser
     */
    public function setScMaxFf($scMaxFf)
    {
        $this->scMaxFf = $scMaxFf;

        return $this;
    }

    /**
     * Get scMaxFf
     *
     * @return integer 
     */
    public function getScMaxFf()
    {
        return $this->scMaxFf;
    }

    /**
     * Set scofDayFf
     *
     * @param integer $scofDayFf
     * @return ScUser
     */
    public function setScofDayFf($scofDayFf)
    {
        $this->scofDayFf = $scofDayFf;

        return $this;
    }

    /**
     * Get scofDayFf
     *
     * @return integer 
     */
    public function getScofDayFf()
    {
        return $this->scofDayFf;
    }

    /**
     * Set nbQAr
     *
     * @param integer $nbQAr
     * @return ScUser
     */
    public function setNbQAr($nbQAr)
    {
        $this->nbQAr = $nbQAr;

        return $this;
    }

    /**
     * Get nbQAr
     *
     * @return integer 
     */
    public function getNbQAr()
    {
        return $this->nbQAr;
    }

    /**
     * Set nbBrAr
     *
     * @param integer $nbBrAr
     * @return ScUser
     */
    public function setNbBrAr($nbBrAr)
    {
        $this->nbBrAr = $nbBrAr;

        return $this;
    }

    /**
     * Get nbBrAr
     *
     * @return integer 
     */
    public function getNbBrAr()
    {
        return $this->nbBrAr;
    }

    /**
     * Set prctBrAr
     *
     * @param string $prctBrAr
     * @return ScUser
     */
    public function setPrctBrAr($prctBrAr)
    {
        $this->prctBrAr = $prctBrAr;

        return $this;
    }

    /**
     * Get prctBrAr
     *
     * @return string 
     */
    public function getPrctBrAr()
    {
        return $this->prctBrAr;
    }

    /**
     * Set nbPAr
     *
     * @param integer $nbPAr
     * @return ScUser
     */
    public function setNbPAr($nbPAr)
    {
        $this->nbPAr = $nbPAr;

        return $this;
    }

    /**
     * Get nbPAr
     *
     * @return integer 
     */
    public function getNbPAr()
    {
        return $this->nbPAr;
    }

    /**
     * Set scTotAr
     *
     * @param integer $scTotAr
     * @return ScUser
     */
    public function setScTotAr($scTotAr)
    {
        $this->scTotAr = $scTotAr;

        return $this;
    }

    /**
     * Get scTotAr
     *
     * @return integer 
     */
    public function getScTotAr()
    {
        return $this->scTotAr;
    }

    /**
     * Set scMoyAr
     *
     * @param string $scMoyAr
     * @return ScUser
     */
    public function setScMoyAr($scMoyAr)
    {
        $this->scMoyAr = $scMoyAr;

        return $this;
    }

    /**
     * Get scMoyAr
     *
     * @return string 
     */
    public function getScMoyAr()
    {
        return $this->scMoyAr;
    }

    /**
     * Set scMaxAr
     *
     * @param integer $scMaxAr
     * @return ScUser
     */
    public function setScMaxAr($scMaxAr)
    {
        $this->scMaxAr = $scMaxAr;

        return $this;
    }

    /**
     * Get scMaxAr
     *
     * @return integer 
     */
    public function getScMaxAr()
    {
        return $this->scMaxAr;
    }

    /**
     * Set scofDayAr
     *
     * @param integer $scofDayAr
     * @return ScUser
     */
    public function setScofDayAr($scofDayAr)
    {
        $this->scofDayAr = $scofDayAr;

        return $this;
    }

    /**
     * Get scofDayAr
     *
     * @return integer 
     */
    public function getScofDayAr()
    {
        return $this->scofDayAr;
    }

    /**
     * Set nbQLx
     *
     * @param integer $nbQLx
     * @return ScUser
     */
    public function setNbQLx($nbQLx)
    {
        $this->nbQLx = $nbQLx;

        return $this;
    }

    /**
     * Get nbQLx
     *
     * @return integer 
     */
    public function getNbQLx()
    {
        return $this->nbQLx;
    }

    /**
     * Set nbBrLx
     *
     * @param integer $nbBrLx
     * @return ScUser
     */
    public function setNbBrLx($nbBrLx)
    {
        $this->nbBrLx = $nbBrLx;

        return $this;
    }

    /**
     * Get nbBrLx
     *
     * @return integer 
     */
    public function getNbBrLx()
    {
        return $this->nbBrLx;
    }

    /**
     * Set prctBrLx
     *
     * @param string $prctBrLx
     * @return ScUser
     */
    public function setPrctBrLx($prctBrLx)
    {
        $this->prctBrLx = $prctBrLx;

        return $this;
    }

    /**
     * Get prctBrLx
     *
     * @return string 
     */
    public function getPrctBrLx()
    {
        return $this->prctBrLx;
    }

    /**
     * Set nbPLx
     *
     * @param integer $nbPLx
     * @return ScUser
     */
    public function setNbPLx($nbPLx)
    {
        $this->nbPLx = $nbPLx;

        return $this;
    }

    /**
     * Get nbPLx
     *
     * @return integer 
     */
    public function getNbPLx()
    {
        return $this->nbPLx;
    }

    /**
     * Set scTotLx
     *
     * @param integer $scTotLx
     * @return ScUser
     */
    public function setScTotLx($scTotLx)
    {
        $this->scTotLx = $scTotLx;

        return $this;
    }

    /**
     * Get scTotLx
     *
     * @return integer 
     */
    public function getScTotLx()
    {
        return $this->scTotLx;
    }

    /**
     * Set scMoyLx
     *
     * @param string $scMoyLx
     * @return ScUser
     */
    public function setScMoyLx($scMoyLx)
    {
        $this->scMoyLx = $scMoyLx;

        return $this;
    }

    /**
     * Get scMoyLx
     *
     * @return string 
     */
    public function getScMoyLx()
    {
        return $this->scMoyLx;
    }

    /**
     * Set scMaxLx
     *
     * @param integer $scMaxLx
     * @return ScUser
     */
    public function setScMaxLx($scMaxLx)
    {
        $this->scMaxLx = $scMaxLx;

        return $this;
    }

    /**
     * Get scMaxLx
     *
     * @return integer 
     */
    public function getScMaxLx()
    {
        return $this->scMaxLx;
    }

    /**
     * Set scofDayLx
     *
     * @param integer $scofDayLx
     * @return ScUser
     */
    public function setScofDayLx($scofDayLx)
    {
        $this->scofDayLx = $scofDayLx;

        return $this;
    }

    /**
     * Get scofDayLx
     *
     * @return integer 
     */
    public function getScofDayLx()
    {
        return $this->scofDayLx;
    }

    /**
     * Set scofDayTM
     *
     * @param integer $scofDayTM
     * @return ScUser
     */
    public function setScofDayTM($scofDayTM)
    {
        $this->scofDayTM = $scofDayTM;

        return $this;
    }

    /**
     * Get scofDayTM
     *
     * @return integer 
     */
    public function getScofDayTM()
    {
        return $this->scofDayTM;
    }

    /**
     * Set scMaxTM
     *
     * @param integer $scMaxTM
     * @return ScUser
     */
    public function setScMaxTM($scMaxTM)
    {
        $this->scMaxTM = $scMaxTM;

        return $this;
    }

    /**
     * Get scMaxTM
     *
     * @return integer 
     */
    public function getScMaxTM()
    {
        return $this->scMaxTM;
    }

    /**
     * Set highClassDayTM
     *
     * @param integer $highClassDayTM
     * @return ScUser
     */
    public function setHighClassDayTM($highClassDayTM)
    {
        $this->highClassDayTM = $highClassDayTM;

        return $this;
    }

    /**
     * Get highClassDayTM
     *
     * @return integer 
     */
    public function getHighClassDayTM()
    {
        return $this->highClassDayTM;
    }

    /**
     * Set numHighClassDayTM
     *
     * @param integer $numHighClassDayTM
     * @return ScUser
     */
    public function setNumHighClassDayTM($numHighClassDayTM)
    {
        $this->numHighClassDayTM = $numHighClassDayTM;

        return $this;
    }

    /**
     * Get numHighClassDayTM
     *
     * @return integer 
     */
    public function getNumHighClassDayTM()
    {
        return $this->numHighClassDayTM;
    }

    /**
     * Set highClassDayMu
     *
     * @param integer $highClassDayMu
     * @return ScUser
     */
    public function setHighClassDayMu($highClassDayMu)
    {
        $this->highClassDayMu = $highClassDayMu;

        return $this;
    }

    /**
     * Get highClassDayMu
     *
     * @return integer 
     */
    public function getHighClassDayMu()
    {
        return $this->highClassDayMu;
    }

    /**
     * Set numHighClassDayMu
     *
     * @param integer $numHighClassDayMu
     * @return ScUser
     */
    public function setNumHighClassDayMu($numHighClassDayMu)
    {
        $this->numHighClassDayMu = $numHighClassDayMu;

        return $this;
    }

    /**
     * Get numHighClassDayMu
     *
     * @return integer 
     */
    public function getNumHighClassDayMu()
    {
        return $this->numHighClassDayMu;
    }

    /**
     * Set highClassDayFf
     *
     * @param integer $highClassDayFf
     * @return ScUser
     */
    public function setHighClassDayFf($highClassDayFf)
    {
        $this->highClassDayFf = $highClassDayFf;

        return $this;
    }

    /**
     * Get highClassDayFf
     *
     * @return integer 
     */
    public function getHighClassDayFf()
    {
        return $this->highClassDayFf;
    }

    /**
     * Set numHighClassDayFf
     *
     * @param integer $numHighClassDayFf
     * @return ScUser
     */
    public function setNumHighClassDayFf($numHighClassDayFf)
    {
        $this->numHighClassDayFf = $numHighClassDayFf;

        return $this;
    }

    /**
     * Get numHighClassDayFf
     *
     * @return integer 
     */
    public function getNumHighClassDayFf()
    {
        return $this->numHighClassDayFf;
    }

    /**
     * Set highClassDayAr
     *
     * @param integer $highClassDayAr
     * @return ScUser
     */
    public function setHighClassDayAr($highClassDayAr)
    {
        $this->highClassDayAr = $highClassDayAr;

        return $this;
    }

    /**
     * Get highClassDayAr
     *
     * @return integer 
     */
    public function getHighClassDayAr()
    {
        return $this->highClassDayAr;
    }

    /**
     * Set numHighClassDayAr
     *
     * @param integer $numHighClassDayAr
     * @return ScUser
     */
    public function setNumHighClassDayAr($numHighClassDayAr)
    {
        $this->numHighClassDayAr = $numHighClassDayAr;

        return $this;
    }

    /**
     * Get numHighClassDayAr
     *
     * @return integer 
     */
    public function getNumHighClassDayAr()
    {
        return $this->numHighClassDayAr;
    }

    /**
     * Set highClassDayLx
     *
     * @param integer $highClassDayLx
     * @return ScUser
     */
    public function setHighClassDayLx($highClassDayLx)
    {
        $this->highClassDayLx = $highClassDayLx;

        return $this;
    }

    /**
     * Get highClassDayLx
     *
     * @return integer 
     */
    public function getHighClassDayLx()
    {
        return $this->highClassDayLx;
    }

    /**
     * Set numHighClassDayLx
     *
     * @param integer $numHighClassDayLx
     * @return ScUser
     */
    public function setNumHighClassDayLx($numHighClassDayLx)
    {
        $this->numHighClassDayLx = $numHighClassDayLx;

        return $this;
    }

    /**
     * Get numHighClassDayLx
     *
     * @return integer 
     */
    public function getNumHighClassDayLx()
    {
        return $this->numHighClassDayLx;
    }

    /**
     * Set kingMaster
     *
     * @param integer $kingMaster
     * @return ScUser
     */
    public function setKingMaster($kingMaster)
    {
        $this->kingMaster = $kingMaster;

        return $this;
    }

    /**
     * Get kingMaster
     *
     * @return integer
     */
    public function getKingMaster()
    {
        return $this->kingMaster;
    }

    /**
     * Set highScKM
     *
     * @param integer $highScKM
     * @return ScUser
     */
    public function setHighScKM($highScKM)
    {
        $this->highScKM = $highScKM;

        return $this;
    }

    /**
     * Get highScKM
     *
     * @return integer 
     */
    public function getHighScKM()
    {
        return $this->highScKM;
    }

    /**
     * Set highClassKM
     *
     * @param integer $highClassKM
     * @return ScUser
     */
    public function setHighClassKM($highClassKM)
    {
        $this->highClassKM = $highClassKM;

        return $this;
    }

    /**
     * Get highClassKM
     *
     * @return integer 
     */
    public function getHighClassKM()
    {
        return $this->highClassKM;
    }

    /**
     * Set numHighClassKM
     *
     * @param integer $numHighClassKM
     * @return ScUser
     */
    public function setNumHighClassKM($numHighClassKM)
    {
        $this->numHighClassKM = $numHighClassKM;

        return $this;
    }

    /**
     * Get numHighClassKM
     *
     * @return integer 
     */
    public function getNumHighClassKM()
    {
        return $this->numHighClassKM;
    }

    /**
     * Set scofWeekMu
     *
     * @param integer $scofWeekMu
     * @return ScUser
     */
    public function setScofWeekMu($scofWeekMu)
    {
        $this->scofWeekMu = $scofWeekMu;

        return $this;
    }

    /**
     * Get scofWeekMu
     *
     * @return integer 
     */
    public function getScofWeekMu()
    {
        return $this->scofWeekMu;
    }

    /**
     * Set scofWeekFf
     *
     * @param integer $scofWeekFf
     * @return ScUser
     */
    public function setScofWeekFf($scofWeekFf)
    {
        $this->scofWeekFf = $scofWeekFf;

        return $this;
    }

    /**
     * Get scofWeekFf
     *
     * @return integer 
     */
    public function getScofWeekFf()
    {
        return $this->scofWeekFf;
    }

    /**
     * Set scofWeekAr
     *
     * @param integer $scofWeekAr
     * @return ScUser
     */
    public function setScofWeekAr($scofWeekAr)
    {
        $this->scofWeekAr = $scofWeekAr;

        return $this;
    }

    /**
     * Get scofWeekAr
     *
     * @return integer 
     */
    public function getScofWeekAr()
    {
        return $this->scofWeekAr;
    }

    /**
     * Set scofWeekLx
     *
     * @param integer $scofWeekLx
     * @return ScUser
     */
    public function setScofWeekLx($scofWeekLx)
    {
        $this->scofWeekLx = $scofWeekLx;

        return $this;
    }

    /**
     * Get scofWeekLx
     *
     * @return integer 
     */
    public function getScofWeekLx()
    {
        return $this->scofWeekLx;
    }

    /**
     * Set medailles
     *
     * @param \MDQ\UserBundle\Entity\Medailles $medailles
     * @return ScUser
     */
    public function setMedailles(\MDQ\UserBundle\Entity\Medailles $medailles = null)
    {
        $this->medailles = $medailles;

        return $this;
    }

    /**
     * Get medailles
     *
     * @return \MDQ\UserBundle\Entity\Medailles 
     */
    public function getMedailles()
    {
        return $this->medailles;
    }

    /**
     * Set nbBrtot
     *
     * @param integer $nbBrtot
     * @return ScUser
     */
    public function setNbBrtot($nbBrtot)
    {
        $this->nbBrtot = $nbBrtot;

        return $this;
    }

    /**
     * Get nbBrtot
     *
     * @return integer 
     */
    public function getNbBrtot()
    {
        return $this->nbBrtot;
    }

    /**
     * Set nbPtot
     *
     * @param integer $nbPtot
     * @return ScUser
     */
    public function setNbPtot($nbPtot)
    {
        $this->nbPtot = $nbPtot;

        return $this;
    }

    /**
     * Get nbPtot
     *
     * @return integer 
     */
    public function getNbPtot()
    {
        return $this->nbPtot;
    }
}
