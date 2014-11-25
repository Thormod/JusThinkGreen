<?php

return array( 

    /*
    |--------------------------------------------------------------------------
    | oAuth Config
    |--------------------------------------------------------------------------
    */

    /**
     * Storage
     */
    'storage' => 'Session', 

    /**
     * Consumers
     */
    'consumers' => array(

        /**
         * Facebook
         */
        'Facebook' => array(
            'client_id'     => '705336489562653',
            'client_secret' => 'f910613245ee39f62737b9f56e873847',
            'scope'         => array('email'),
        ),

        'Google' => array(
             'client_id'     => '707213667469-61o53i0drl1r3ao8rebhj32r7shgsvo2.apps.googleusercontent.com',
             'client_secret' => 'jgmikhbQb1T25CfxVEYd47C4',
             'scope'         => array('userinfo_email', 'userinfo_profile'),
        ),        

    )

);