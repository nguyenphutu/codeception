<?php


class Test_Sample_LaravelCest
{
    // tests
    public function frontpageWorks(AcceptanceTester $I)
    {
		$I -> amOnPage('/');
		$I -> see('Laravel');
    }
}
