<?php

/**
 * DAL
 * @author: Gabriel Malaquias
 * @date: 05/06/2015 23:40:19
 */

namespace Entities;

/**
 * Class ProfileMenu
 * @package Entities
 * @TableName: profilemenu
 */
class ProfileMenu{
    /**
     * @PrimaryKey
     * @Name: id
     * @Type: int(11)
     */
    public $id = 0;

    /**
     * @Name: profileId
     * @Type: int(11)
     */
    public $profileId = 0;

    /**
     * @Name: menuId
     * @Type: int(11)
     */
    public $menuId = 0;

    /**
     * @NotMapped
     * @Virtual
     * @Name: _Menu
     * @Fk: menuId
     * @Type: Menu
     */
    public $_Menu;

    /**
     * @NotMapped
     * @Virtual
     * @Name: _Profile
     * @Fk: profileId
     * @Type: Profile
     */
    public $_Profile;


}
