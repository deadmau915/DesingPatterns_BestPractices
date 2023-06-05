<?php
class Tuple
{
    protected $label;
    protected $number;

    public function __construct($label, $number)
    {
        $this->label = $label;
        $this->number = $number;
    }

    public function get_label()
    {
        return $this->label;
    }

    public function get_number()
    {
        return $this->number;
    }
}
?>