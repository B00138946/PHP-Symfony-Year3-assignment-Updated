<?php


namespace App\Tests\Functional;

use App\Tests\FunctionalTester;
use \Codeception\Util\HttpCode;
use Codeception\Attribute\Depends;


class SecondCest
{
    public function validatorAvailable(FunctionalTester $I)
    {
        $validatorAvailableStatus = false;
        try{
            $url = '/product';
            $I->amOnPage($url);
            $I->validateMarkup(['ignoreWarnings' => false]);

            // if get here - validator is available ...
            $I->canSee(' ');
            $validatorAvailableStatus = true;
        } catch (\Exception $e){
            $I->canSee('&&&&&&&&& ---- validatorAvailable = FALSE - could NOT connect to the W3C validator - so will not run HTML validation tests in this class --- &&&&&&&&&&');
        }
    }

    #[Depends('validatorAvailable')]
    public function web1_01_pageValidHtmlNoErrors_Home(FunctionalTester $I)
    {
        $url = '/product';
        $I->amOnPage($url);
        $I->validateMarkup(['ignoreWarnings' => false]);
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->dontSeeResponseCodeIs(HttpCode::NOT_FOUND);
    }


    #[Depends('validatorAvailable')]
    public function web1_02_page2ValidHtmlNoErrors_Home(FunctionalTester $I)
    {
        $url = '/productDetails';
        $I->amOnPage($url);
        $I->validateMarkup(['ignoreWarnings' => false]);
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->dontSeeResponseCodeIs(HttpCode::NOT_FOUND);
    }


}
