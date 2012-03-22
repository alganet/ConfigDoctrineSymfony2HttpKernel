<?php

namespace Blog\Entities;

/**
 * @Entity
 * @Table(name="post")
 */
class Post
{
	/**
	 * @Id 
	 * @Column(type="integer")
	 * @GeneratedValue
	 * @var integer
	 */
	protected $id;
	/**
	 * @ManyToOne(targetEntity="Blog\Entities\User", cascade={"persist", "merge", "remove"})
     * @JoinColumn(name="user_id", referencedColumnName="id")
	 * @var Blog\Entities\User
	 */
	protected $user_id;
	/**
	 * @Column(name="title", type="string")
	 * @var string
	 */
	protected $title;
	/**
	 * @Column(name="content", type="text")
	 * @var string
	 */
	protected $content;
	/**
	 * @Column(name="created", type="datetime")
	 * @var DateTime
	 */
	protected $created;

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
     * @return Post
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
     * Set content
     *
     * @param text $content
     * @return Post
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Get content
     *
     * @return text 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set created
     *
     * @param datetime $created
     * @return Post
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     *
     * @return datetime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set user_id
     *
     * @param Blog\Entities\User $userId
     * @return Post
     */
    public function setUserId(\Blog\Entities\User $userId = null)
    {
        $this->user_id = $userId;
        return $this;
    }

    /**
     * Get user_id
     *
     * @return Blog\Entities\User 
     */
    public function getUserId()
    {
        return $this->user_id;
    }
}