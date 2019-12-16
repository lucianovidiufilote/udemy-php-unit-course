<?php


class User
{
    /**
     * @var string
     */
    public $first_name;

    /**
     * @var string
     */
    public $surname;

    /**
     * @var string
     */
    public $email;

    /**
     * @var Mailer $mailer
     */
    protected $mailer;

    /**
     * @param Mailer $mailer
     */
    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }


    public function getFullName()
    {
        return trim("$this->first_name $this->surname");
    }

    public function notify($message)
    {
        return $this->mailer->sendMessage($this->email, $message);
    }
}