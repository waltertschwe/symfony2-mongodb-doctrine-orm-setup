<?php

namespace Story\AdminBundle\Document;


class Page {
		


    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var string $pageName
     */
    protected $pageName;

    /**
     * @var string $pageNumber
     */
    protected $pageNumber;

    /**
     * @var string $choice
     */
    protected $choice;


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
     * Set pageName
     *
     * @param string $pageName
     * @return self
     */
    public function setPageName($pageName)
    {
        $this->pageName = $pageName;
        return $this;
    }

    /**
     * Get pageName
     *
     * @return string $pageName
     */
    public function getPageName()
    {
        return $this->pageName;
    }

    /**
     * Set pageNumber
     *
     * @param string $pageNumber
     * @return self
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    /**
     * Get pageNumber
     *
     * @return string $pageNumber
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * Set choice
     *
     * @param string $choice
     * @return self
     */
    public function setChoice($choice)
    {
        $this->choice = $choice;
        return $this;
    }

    /**
     * Get choice
     *
     * @return string $choice
     */
    public function getChoice()
    {
        return $this->choice;
    }
}
