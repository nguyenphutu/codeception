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
	
	public function clickLinkDocumentation(AcceptanceTester $I)
    {
		$I -> amOnPage('/');
		$I->expect('Click link documentation anh check link not die.');
		$I -> seeLink('Documentation');
		$I -> click(['link' => 	'Documentation']);
		$I -> dontSee('Sorry, the page you are looking for could not be found.');
		$I -> seeInCurrentUrl('docs/');
    }
}
