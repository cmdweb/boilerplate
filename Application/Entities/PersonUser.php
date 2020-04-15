<?php

/**
 * DAL
 * @author: Gabriel Malaquias
 * @date: 05/06/2015 23:17:13
 */

namespace Entities;

/**
 * Class PersonUser
 * @package Entities
 * @TableName: personuser
 */
class PersonUser{
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
     * @Name: login
     * @DisplayName: E-mail
     * @Type: varchar(60)
     * @Required
     */
    public $login;

    /**
     * @Name: password
     * @DisplayName: Senha
     * @Type: varchar(60)
     * @Required
     */
    public $password;

    /**
     * @Name: disable
     * @Type: tinyint(1)
     */
    public $disable = false;

    /**
     * @Name: creationDate
     * @Type: timestamp
     */
    public $creationDate = CURRENT_TIMESTAMP;

    /**
     * @Name: lastAccess
     * @Type: timestamp
     */
    public $lastAccess = CURRENT_TIMESTAMP;

    /**
     * @Name: lastIp
     * @Type: varchar(30)
     */
    public $lastIp;

    /**
     * @Name: logged
     * @Type: tinyint(1)
     */
    public $logged = false;

    /**
     * @Name: lastActivity
     * @Type: timestamp
     */
    public $lastActivity = CURRENT_TIMESTAMP;

    /**
     * @Name: lastPage
     * @Type: varchar(60)
     */
    public $lastPage;

    /**
     * @Name: ignoreSendEmail
     * @Type: tinyint(1)
     */
    public $ignoreSendEmail = false;

    /**
     * @Name: dataUltimaConsulta
     * @Type: datetime
     */
    public $dataUltimaConsulta;

    /**
     * @Name: dataInstalacao
     * @Type: date
     */
    public $dataInstalacao;

    /**
     * @Name: dataRenovacao
     * @Type: date
     */
    public $dataRenovacao;

    /**
     * @Name: dataVencimento
     * @Type: date
     */
    public $dataVencimento;

    /**
     * @Name: versao
     * @Type: varchar(10)
     */
    public $versao;

    /**
     * @Name: versaoInstalada
     * @Type: varchar(10)
     */
    public $versaoInstalada;

    /**
     * @Name: versaoLiberada
     * @Type: varchar(10)
     */
    public $versaoLiberada;

    /**
     * @Name: maxComputadoresOffline
     * @Type: int(11)
     */
    public $maxComputadoresOffline;

    /**
     * @NotMapped
     * @Virtual
     * @Name: _Person
     * @Fk: personId
     * @Type: Person
     */
    public $_Person;

    /**
     * @NotMapped
     */
    public $remember = false;



}
