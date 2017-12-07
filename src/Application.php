<?php

namespace PHPCensorTest;

class Application
{
    public function success()
    {
        //TODO: 1
        echo 'success command';
        exit(0);
    }

    public function failed()
    {
        //TODO: 2
        echo 'failed command';
        exit(1);
    }
}
