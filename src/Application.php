<?php

namespace PHPCensorTest;

class Application
{
    public function success()
    {
        echo 'success command';
        exit(0);
    }

    public function failed()
    {
        echo 'failed command';
        exit(1);
    }
}
