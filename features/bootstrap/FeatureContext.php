<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }
    /**
     * @Given I am in the :arg1
     */
    public function iAmInThe($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I execute :arg1
     */
    public function iExecute($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should get :arg1
     */
    public function iShouldGet($arg1)
    {
        throw new PendingException();
    }
}
