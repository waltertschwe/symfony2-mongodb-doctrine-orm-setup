<?php

namespace Story\AdminBundle\Document;


class Story {
    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var string $storyName
     */
    protected $storyName;

    /**
     * @var string $author
     */
    protected $author;

    /**
     * @var string $description
     */
    protected $description;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set storyName
     *
     * @param string $storyName
     * @return self
     */
    public function setStoryName($storyName)
    {
        $this->storyName = $storyName;
        return $this;
    }

    /**
     * Get storyName
     *
     * @return string $storyName
     */
    public function getStoryName()
    {
        return $this->storyName;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return self
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Get author
     *
     * @return string $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
   
    /**
     * @var hash $pages
     */
    protected $pages;


    /**
     * Set pages
     *
     * @param hash $pages
     * @return self
     */
    public function setPages($pages)
    {
        $this->pages = $pages;
        return $this;
    }

    /**
     * Get pages
     *
     * @return hash $pages
     */
    public function getPages()
    {
        return $this->pages;
    }
}
