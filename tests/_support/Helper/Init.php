<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Init extends \Codeception\Module
{
      /**
     * @Given Im on page :arg1
     */
     public function imOnPage($arg1)
     {
         throw new \Codeception\Exception\Incomplete("Step `Im on page :arg1` is not defined");
     }

    /**
     * @When I fill :arg1 on :arg2
     */
     public function iFillOn($arg1, $arg2)
     {
         throw new \Codeception\Exception\Incomplete("Step `I fill :arg1 on :arg2` is not defined"                                                   );
     }

    /**
     * @When I press :arg1
     */
     public function iPress($arg1)
     {
         throw new \Codeception\Exception\Incomplete("Step `I press :arg1` is not defined");
     }

    /**
     * @Then I see page :arg1
     */
     public function iSeePage($arg1)
     {
         throw new \Codeception\Exception\Incomplete("Step `I see page :arg1` is not defined");
     }

    /**
     * @Then I see :arg1 in :arg2
     */
     public function iSeeIn($arg1, $arg2)
     {
         throw new \Codeception\Exception\Incomplete("Step `I see :arg1 in :arg2` is not defined")                                                   ;
     }

}
