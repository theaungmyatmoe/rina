<?php

namespace App\Classes;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;


class FlipErrors
{
    private $whoops;

    /**
     *
     * @boolean for app debuging mode
     *
     * */
    public function __construct($mode)
    {
        /**
         *
         * @var Check Mode
         * @default On
         *
         * */
        switch ($mode) {
            case $mode === "On":
            {
                $this->whoops = new Run;
                $this->getFlipErrors();
                break;
            }
            case $mode === "Off":
                error_reporting(0);
                break;
            default:
                $this->whoops = new Run;
                $this->getFlipErrors();
                break;
        }
    }

    public function getFlipErrors()
    {
        $this->whoops->pushHandler(new PrettyPageHandler);
        $this->whoops->register();

    }
}
