<?php

namespace Renz\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Condit
 *
 * @ORM\Table(name="condit")
 * @ORM\Entity(repositoryClass="Renz\ModelBundle\Entity\ConditRepository")
 */
class Condit
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="detail", type="string", length=800)
     */
    private $detail;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;
	
    /**
     * @ORM\ManyToOne(targetEntity="Room", inversedBy="condits")
     * @ORM\JoinColumn(name="room_id", referencedColumnName="id")
     */
    protected $room;

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
     * Set title
     *
     * @param string $title
     * @return Condit
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set detail
     *
     * @param string $detail
     * @return Condit
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string 
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Condit
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set room
     *
     * @param \Renz\ModelBundle\Entity\Room $room
     * @return Condit
     */
    public function setRoom(\Renz\ModelBundle\Entity\Room $room = null)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return \Renz\ModelBundle\Entity\Room 
     */
    public function getRoom()
    {
        return $this->room;
    }
}
