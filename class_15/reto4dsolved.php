<?php

interface ProgrammerInterface
{
    public function program();
    public function filetps();
}

interface CollatingInterface
{
    public function collate();
}

class Underling implements ProgrammerInterface, CollatingInterface
{
    public function program()
    {
        return 'Program initech systems to deposit fractions of pennies to private account';
    }

    public function filetps()
    {
        return 'Place cover sheet on TPS report before going out';
    }

    public function collate()
    {
        return 'Collect and combine texts, information, and figures in proper order.';
    }

    public function process()
    {
        $this->program();
        $this->filetps();
        $this->collate();
    }
}

class Consultant implements ProgrammerInterface
{
    public function program()
    {
        return 'Outsource task to India';
    }

    public function filetps()
    {
        return 'Place cover sheet on TPS report before going out';
    }

    public function process()
    {
        $this->program();
        $this->filetps();
    }

}

class Lumbergh
{
    protected $underling;

    public function __construct($underling)
    {
        $this->underling = $underling;
    }

    public function harass()
    {
        $this->underling->process();
    }
}

?>