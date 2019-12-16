<?php


class Mailer
{
    /**
     * Send a message
     *
     * @param string $email
     * @param string $message
     * @return bool
     * @throws Exception
     */
    public function sendMessage($email, $message)
    {
        if (empty($email)) {
            throw new Exception();
        }
        sleep(3);
        echo "send '$message' to '$email'";
        return true;
    }
}