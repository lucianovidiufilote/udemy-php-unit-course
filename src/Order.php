<?php


class Order
{
    public $amount = 0;

    /** @var PaymentGateway */
    protected $gateway;

    public function __construct(PaymentGateway $gateway)
    {
        $this->gateway = $gateway;
    }

    /**
     *
     * Process the order
     *
     * @return boolean
     */
    public function process()
    {
        return $this->gateway->charge($this->amount);
    }
}