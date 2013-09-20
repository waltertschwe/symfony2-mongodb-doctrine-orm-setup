<?php

namespace WebForms\TestBundle\Entity;

class Task {
    protected $task;
	protected $dueDate;
	protected $textArea;
	protected $email; 
	protected $integer;
	protected $money;
	protected $number;
	protected $password;
	protected $percent;
	protected $search;
	protected $url;


 	/* 
	 * Task Set & Get
    */
    
    public function getTask() {
        return $this->task;
    }
	
    public function setTask($task) {
        $this->task = $task;
    }
	
	/*
	 * Date Set & Get
	*/
	
    public function getDueDate() {
        return $this->dueDate;
    }
	
	
    public function setDueDate(\DateTime $dueDate = null) {
        $this->dueDate = $dueDate;
    }
	
	/*
	 * Text Area Set & Get
	*/
	
	public function getTextArea() {
		return $this->textArea;
	}
	
	public function setTextArea($textArea) {
		$this->textArea = $textArea;
	}
	
	
	/*
	 * Email Set & Get
	*/
	
	public function getEmail() {
		return $this->email;
	}
	
	public function setEmail($email) {
		$this->email = $email;
	}
	
	
	/*
	 * Integer Set & Get
	*/
	
	
	public function getInteger() {
	    return $this->integer;	
	}
	
	public function setInteger($integer) {
	    $this->integer = $integer;
	}
	
	/*
	 * Money Set & Get
	*/
	
	public function setMoney($money) {
		$this->money = $money;
	}
	
	public function getMoney() {
		return $this->money;
	}
	
	/*
	 *  Number Set & Get
	*/
	
	public function setNumber($number) {
		$this->number = $number;
	}
	
	public function getNumber() {
		return $this->number;
	}
	
	/*
	 *  Password Set & Get
	*/
	
	public function setPassword($password) {
		$this->password = $password;
	}
	
	public function getPassword() {
		return $this->password;
	}
	
	/*
	 * Percent Set & Get
	 */
	
	public function setPercent($percent) {
		$this->percent = $percent;
	}
	
	public function getPercent() {
		return $this->percent;
	}
	
	/*
	 * Search Set & Get
	 */
	
	public function setSearch($search) {
		$this->search = $search;
	}
	
	public function getSearch() {
		return $this->search;
	}
	
	public function setUrl($url) {
		$this->url = $url;
	}
	
	public function getUrl() {
		return $this->url;
	}
	
}