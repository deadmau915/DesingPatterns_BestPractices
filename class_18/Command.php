<?php

interface Command {
    public function execute();
}

class LightOnCommand implements Command {
    private $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->on();
    }
}

class Light {
    public function on() {
        echo "Light is on.";
    }

    public function off() {
        echo "Light is off.";
    }
}

class RemoteControl {
    private $command;

    public function setCommand(Command $command) {
        $this->command = $command;
    }

    public function pressButton() {
        $this->command->execute();
    }
}

$light = new Light();
$lightOnCommand = new LightOnCommand($light);

$remoteControl = new RemoteControl();
$remoteControl->setCommand($lightOnCommand);
$remoteControl->pressButton();  // Output: "Light is on."

?>