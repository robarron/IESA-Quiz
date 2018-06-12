<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quiz
 *
 * @ORM\Table(name="quiz")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuizRepository")
 */
class Quiz
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
     * @ORM\Column(name="question", type="string", length=255, unique=true)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="string", length=255, unique=false)
     */
    private $reponse;

    /**
     * @var string
     *
     * @ORM\Column(name="prop_1", type="string", length=255, nullable=true)
     */
    private $prop1;

    /**
     * @var string
     *
     * @ORM\Column(name="prop_2", type="string", length=255, nullable=true)
     */
    private $prop2;

    /**
     * @var string
     *
     * @ORM\Column(name="prop_3", type="string", length=255, nullable=true)
     */
    private $prop3;

    /**
     * @var string
     *
     * @ORM\Column(name="prop_4", type="string", length=255, nullable=true)
     */
    private $prop4;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Theme", inversedBy="quizList", cascade={"persist"})
     */
    protected $theme;

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
     * Set question
     *
     * @param string $question
     *
     * @return Theme
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set reponse
     *
     * @param string $reponse
     *
     * @return Theme
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return string
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * @return string
     */
    public function getProp1()
    {
        return $this->prop1;
    }

    /**
     * @param string $prop1
     */
    public function setProp1($prop1)
    {
        $this->prop1 = $prop1;
    }

    /**
     * @return string
     */
    public function getProp2()
    {
        return $this->prop2;
    }

    /**
     * @param string $prop2
     */
    public function setProp2($prop2)
    {
        $this->prop2 = $prop2;
    }

    /**
     * @return string
     */
    public function getProp3()
    {
        return $this->prop3;
    }

    /**
     * @param string $prop3
     */
    public function setProp3($prop3)
    {
        $this->prop3 = $prop3;
    }

    /**
     * @return string
     */
    public function getProp4()
    {
        return $this->prop4;
    }

    /**
     * @param string $prop4
     */
    public function setProp4($prop4)
    {
        $this->prop4 = $prop4;
    }
}

