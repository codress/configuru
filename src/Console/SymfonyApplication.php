<?php

namespace Configuru\Console;

use Configuru\Commands\UpdateCommand;
use Symfony\Component\Console\Application as Symfony;

class SymfonyApplication
{
    private $symfony;

    public function __construct(Symfony $symfony)
    {
        $this->symfony = $symfony;
    }

    public function run()
    {
        $this->symfony->setName('Configuru');
        $this->symfony->add(new UpdateCommand());
        $this->symfony->run();
    }
}
