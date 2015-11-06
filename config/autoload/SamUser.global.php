<?php
/**
 *SamUser Configuration
 *
 * If you have a ./config/autoload/ directory set up for your project, you can
 * drop this config file in it and change the values as you wish.
 */
$settings = array(
    

    /**
     * Mapper for ZfcUser
     *
     * Set the mapper to be used here
     * Currently Available mappers
     * 
     * SamUser\Mapper\UserDoctrine
     *
     * By default this is using
     * SamUser\Mapper\UserZendDb
     */
    'user_mapper' => 'SamUser\Mapper\UserDoctrine',
);

/**
 * You do not need to edit below this line
 */
return array(
    'samuser' => $settings
);
