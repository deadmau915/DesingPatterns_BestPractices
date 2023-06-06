<?php

interface Member
{
    public function work();
}

class Programmer implements Member
{
    public function work()
    {
        return 'coding';
    }
}

class Tester implements Member
{
    public function work()
    {
        return 'testing';
    }
}

class ProjectManagement
{
    public function process(Member $member)
    {
        $member->work();
    }
}

?>