<?php
class Programmer
{
    public function code()
    {
        return 'coding';
    }
}

class Tester
{
    public function test()
    {
        return 'testing';
    }
}

class ProjectManagement
{
    public function process($member)
    {
        try {
            $member instanceof Programmer ? $member->code() : $member->test();
        } catch (Exception $e) {
            throw new Exception("$e: Invalid input member");
        }
    }
}
?>