<?php

namespace Creatuity\ComposerTraining\Model;

class Output
{
    public function display()
    {
        $this->dump('Hello World');
    }

    public function displayBye()
    {
        $this->dump('Bye');
    }

    protected function dump($text)
    {
        echo $text;
    }
}