<?php

/**
 * DAL
 * @author: Gabriel Malaquias
 * @date: 06/06/2015 00:42:28
 */

namespace Entities;

/**
 * Class PersonUserProfile
 * @package Entities
 * @TableName: personuserprofile
 */
class PersonUserProfile
{
    /**
     * @PrimaryKey
     * @Name: id
     * @Type: int(11)
     */
    public $id = 0;

    /**
     * @Name: personUserId
     * @Type: int(11)
     */
    public $personUserId = 0;

    /**
     * @Name: profileId
     * @Type: int(11)
     */
    public $profileId = 0;

    /**
    * @Name: empresaId
    * @Type: int(11)
    */
    public $empresaId = 0;

    /**
     * @Name: disabled
     * @Type: tinyint(1)
     */
    public $disabled = false;

    /**
     *
     * /**
     * @NotMapped
     * @Virtual
     * @Name: _Personuser
     * @Fk: personUserId
     * @Type: Personuser
     */
    public $_PersonUser;

    /**
     * @NotMapped
     * @Virtual
     * @Name: _Profile
     * @Fk: profileId
     * @Type: Profile
     */
    public $_Profile;


}
