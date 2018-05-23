<?php


class Test_Sample_LaravelCest
{
    // tests
    public function frontpageWorks(AcceptanceTester $I)
    {
		$I -> amOnPage('/');
		$I -> seeInTitle('Laravel');
		$I -> seeElement('.title');
		$I -> see('Laravel', '.title');
    }
	public function hasLinkDocLaravel(AcceptanceTester $I)
    {
		$I -> amOnPage('/');
		$I -> seeElement('.links');
		$I -> seeLink('Documentation');
		$I -> seeLink('Laracasts');
		$I -> seeLink('News');
		$I -> seeLink('Forge');
		$I -> seeLink('GitHub');
    }
}
