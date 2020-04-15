<?php

/**
 * DAL
 * @author: Gabriel Malaquias
 * @date: 05/06/2015 23:38:46
 */

namespace Entities;

/**
 * Class Menu
 * @TableName: menu
 */
class Menu{
    /**
     * @PrimaryKey
     * @Name: id
     * @Type: int(11)
     */
    public $id = 0;

    /**
     * @Name: description
     * @Type: varchar(90)
     */
    public $description;

    /**
     * @Name: icon
     * @Type: varchar(50)
     */
    public $icon;

    /**
     * @Name: isPage
     * @Type: tinyint(1)
     */
    public $isPage = false;

    /**
     * @Name: isSubMenu
     * @Type: tinyint(1)
     */
    public $isSubMenu = false;

    /**
     * @Name: menuId
     * @Type: int(11)
     */
    public $menuId = 0;

    /**
     * @Name: deleted
     * @Type: tinyint(1)
     */
    public $deleted = false;

    /**
     * @Name: hide
     * @Type: tinyint(1)
     */
    public $hide = false;

    /**
     * @Name: area
     * @Type: varchar(50)
     */
    public $area;

    /**
     * @Name: controller
     * @Type: varchar(50)
     */
    public $controller;

    /**
     * @Name: action
     * @Type: varchar(50)
     */
    public $action;

    /**
     * @Name: disposition
     * @Type: int(11)
     */
    public $disposition = 0;

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
     */
    public $subMenus;

    /**
     * @NotMapped
     */
    public $pages;

    /**
     * @NotMapped
     */
    public $active = false;

}
