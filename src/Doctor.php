<?php


class Doctor extends AbstractPerson
{
    /**
     * @inheritDoc
     */
    protected function getTitle()
    {
        return 'Dr.';
    }
}