<?php

/**
 * DAL
 * @author: Gabriel Malaquias
 * @date: 05/06/2015 23:17:13
 */

namespace Entities;

/**
 * Class Person
 * @package Entities
 * @TableName: person
 */
class Person{
    /**
     * @PrimaryKey
     * @Name: id
     * @Type: int(11)
     */
    public $id = 0;

    /**
     * @Name: name
     * @Type: varchar(255)
     */
    public $name;

    /**
     * @Name: document
     * @Type: varchar(30)
     */
    public $document;

    /**
     * @Name: birthDate
     * @Type: date
     */
    public $birthDate;

    /**
     * @Name: gender
     * @Type: tinyint(1)
     */
    public $gender = false;

    /**
     * @Name: phone
     * @Type: varchar(16)
     */
    public $phone;

    /**
     * @Name: cellphone
     * @Type: varchar(16)
     */
    public $cellphone;

    /**
     * @Name: fax
     * @Type: varchar(16)
     */
    public $fax;

    /**
     * @Name: obs
     * @Type: longtext
     * @AllowHtml
     */
    public $obs;

    /**
     * @Name: empresaId
     * @Type: int(11)
     */
    public $empresaId = 0;

    /**
     * @Name: ie
     * @Type: varchar(50)
     */
    public $ie;

    /**
     * @Name: contato
     * @Type: varchar(80)
     */
    public $contato;

    /**
     * @Name: metroQuadrado
     * @Type: float
     */
    public $metroQuadrado;

    /**
     * @Name: qtdPdvs
     * @Type: int(11)
     */
    public $qtdPdvs = 0;

    /**
     * @Name: creationDate
     * @Type: timestamp
     */
    public $creationDate = CURRENT_TIMESTAMP;

    /**
     * @Name: email
     * @Type: varchar(150)
     */
    public $email;


    /**
     * @Name: juridical
     * @Type: tinyint(1)
     */
    public $juridical = false;

    /**
     * @Name: disable
     * @Type: tinyint(1)
     */
    public $status = true;


    public $lastId = 0;
}
