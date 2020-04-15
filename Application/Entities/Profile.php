<?php

/**
 * DAL
 * @author: Gabriel Malaquias
 * @date: 05/06/2015 23:32:51
 */

namespace Entities;

/**
 * Class Profile
 * @package Entities
 * @TableName: profile
 */
class Profile{
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
}
