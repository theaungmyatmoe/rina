<?php
namespace App\Classes;
use Whoops\Run;
/**
* Custom Error Handler
* Flip Whoops
*
* */

class FlipErrors
{
  private $whoops;
  /**
  *
  * @boolean for app debuging mode
  *
  * */
  public function __construct($mode) {
    /**
    *
    * @var Check Mode
    * @default On
    * */
    switch($mode) {
      case $mode === "On":
        $this->whoops = new Run;
        $this->getFlipErrors();
        break;
      case $mode === "Off":
        error_reporting(0);
        break;
      default:
        $this->whoops = new Run;
        $this->getFlipErrors();
        break;
    }
  }

  /**
  * @return mode is On
  * */

  public function  getFlipErrors() {
    $this->whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $this->whoops->register();

  }
}