<?php
/* the ProjectManagement class violates the OCP because every time you introduce a new type of member (e.g., a Designer), 
you need to modify the ProjectManagement class to handle the new type explicitly. 
This violates the principle of being closed for modification. */
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
            if ($member instanceof Programmer) {
                $member->code();
            } elseif ($member instanceof Tester) {
                $member->test();
            };
            throw new Exception('Invalid input member');
        }
    }
?>