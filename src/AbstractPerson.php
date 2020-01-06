<?php


abstract class AbstractPerson
{
    /**
     * Surname
     *
     * @var
     */
    protected $surname;

    /**
     * AbstractPerson constructor.
     * @param $surname
     */
    public function __construct($surname)
    {
        $this->surname = $surname;
    }

    /**get the person's title
     *
     * @return mixed
     */
    abstract protected function getTitle();

    /**
     * Get the person's name
     *
     * @return string
     */
    public function getNameAndTitle()
    {
        return $this->getTitle(). ' ' . $this->surname;
    }
}