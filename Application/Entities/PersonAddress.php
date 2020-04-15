<?php

/**
 * DAL
 * @author: Gabriel Malaquias
 * @date: 05/06/2015 23:17:13
 */

namespace Entities;

/**
 * Class PersonAddress
 * @package Entities
 * @TableName: personaddress
 */
class PersonAddress
{
    /**
     * @PrimaryKey
     * @Name: id
     * @Type: int(11)
     */
    public $id = 0;

    /**
     * @Name: personId
     * @Type: int(11)
     */
    public $personId = 0;

    /**
     * @Name: address
     * @Type: varchar(255)
     * @Required
     * @DisplayName: Endereço
     */
    public $address;

    /**
    * @Name: neighborhood
    * @Type: varchar(60)
    * @Required
    * @DisplayName: Bairro
    */
    public $neighborhood;

    /**
     * @Name: complement
     * @Type: varchar(120)
     */
    public $complement;

    /**
     * @Name: state
     * @Type: varchar(80)
     * @Required
     * @DisplayName: Estado
     */
    public $state;

    /**
     * @Name: city
     * @Type: varchar(80)
     * @Required
     * @DisplayName: Cidade
     */
    public $city;

    /**
     * @Name: country
     * @Type: varchar(80)
     */
    public $country;

    /**
     * @Name: zipCode
     * @Type: varchar(20)
     * @Required
     * @DisplayName: CEP
     */
    public $zipCode;

    /**
     * @NotMapped
     * @Virtual
     * @Name: _Person
     * @Fk: personId
     * @Type: Person
     */
    public $_Person;


}
