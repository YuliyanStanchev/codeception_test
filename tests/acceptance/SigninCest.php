<?php 

class SigninCest
{
    function _before(AcceptanceTester $I)
    {
    }
    


    public function _after(AcceptanceTester $I)
    {        
    }


    public function signInSuccessfully(AcceptanceTester $I)
    {




        $I->amOnPage('https://profile.dir.bg/login');
        $I->fillField('email','ju.stanchev@gmail.com');
        $I->fillField('password','stanchev123');
        $I->click('input.btn');
        $I->see('Профил');
    

    }
}
