<?php


class Item
{
    /**
     * Get the description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->getID() . $this->getToken();
    }

    /**
     * Get a random ID
     *
     * @return int
     */
    protected function getID()
    {
        return rand();
    }

    /**
     * Get a random token
     *
     * @return string
     */
    private function getToken()
    {
        return uniqid();
    }

    /**
     * Get a random token with a specified prefix
     *
     * @param $prefix
     *
     * @return string
     */
    private function getPrefixedToken($prefix)
    {
        return uniqid($prefix);
    }
}