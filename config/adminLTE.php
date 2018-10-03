<?php

return [

    /**
     * ---------------------------------------------
     * |            Application Name                |
     * ---------------------------------------------
     * 
     * App Name is the exact same one used in .env file
     * name:
     * accepts HTML tags
     * shows on browser tabs
     * shows on top of navigation menu
     * 
     */
    
    'name'  =>  env('APP_NAME', 'AdminLTE'),

    /**
     * ---------------------------------------------
     * |        Application Short Name              |
     * ---------------------------------------------
     * shortName: accepts HTML tags
     *      accepts HTML tags
     *      shows on top of navigation menu (sidebar collapsed)
     * 
     */
    
    'shortName' =>  env('APP_SHORT_NAME', '<b>A</b>LTE'),

    /**
     * ---------------------------------------------
     * |            Application URL                |
     * ---------------------------------------------
     * Application default URL 
     *  it's added by default to the logo & company name links
     * 
     */
    
    'url'   =>  env('APP_URL', 'http://localhost/')





];