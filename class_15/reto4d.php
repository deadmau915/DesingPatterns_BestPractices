<?php
/*Here is a violation of the interface segregation principle, Specifically, the Consultant class implements the UnderlingInterface, 
but the collate() method in the Consultant class returns null, indicating that it does not provide an implementation for that method. 
However, the Lumbergh class still calls the collate() method on the $underling object, assuming that it is implemented. 
This violates the ISP because the Lumbergh class depends on a method that is not implemented by all its dependencies.  */

    interface UnderlingInterface
    {
        public function program();

        public function filetps();

        public function collate();
    }

    class Underling implements UnderlingInterface
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
    }

    class Consultant implements UnderlingInterface
    {
        public function program()
        {
            return 'Outsource task to India';
        }

        public function filetps()
        {
            return 'Place cover sheet on TPS report before going out';
        }

        public function collate()
        {
            return null;
        }
    }

    class Lumbergh
    {
        protected $underling;

        public function __construct(UnderlingInterface $underling)
        {
            $this->underling = $underling;
        }

        public function harass()
        {
            $this->underling->program();
            $this->underling->filetps();
            $this->underling->collate();
        }
    }