<?php


class Product
{
    /**
     * Unique identifier
     *
     * @var integer
     */
    protected $product_id;

    public function __construct()
    {
        $this->product_id = rand();
    }
}