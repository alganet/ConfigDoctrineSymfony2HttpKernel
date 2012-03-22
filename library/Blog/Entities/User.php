<?php

namespace Blog\Entities;

/**
 * @Entity
 * @Table(name="user")
 */
class User
{
	/**
	 * @Id 
	 * @Column(type="integer")
	 * @GeneratedValue
	 * @var integer
	 */
	protected $id;
	/**
	 * @Column(name="username", type="string")
	 * @var string
	 */
	protected $username;
	/**
	 * @Column(name="name", type="string")
	 * @var string
	 */
	protected $name;
	
	public function __construct($name=null, $username=null)
	{
		if (!is_null($name))
			$this->setName($name);
		if (!is_null($username))
			$this->setUsername($username);
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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
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
}