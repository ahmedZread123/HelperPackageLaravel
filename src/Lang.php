<?php 

namespace src ; 

trait Lang 
{
    // get Language 
    public function getCurrentLang()
    {
        return app()->getLocale();
    }

    ////////////////////////////////////////////////////////////////////////

    // set Language 
    public function setCurrentLang($lang)
    {
        app()->setLocale($lang);
    }


}