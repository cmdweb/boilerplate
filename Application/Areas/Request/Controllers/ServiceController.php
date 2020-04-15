<?php
/**
 * Created by PhpStorm.
 * User: gabriel.malaquias
 * Date: 30/01/2015
 * Time: 14:11
 */

namespace Areas\Request\Controllers;

use Alcatraz\Kernel\Controller;
use Alcatraz\Kernel\Layout;
use Alcatraz\Owl\Owl;
use Auxiliares\Email;
use Auxiliares\IP;
use Services\Pdv\PdvBLL;
use Services\Xml\XmlBLL;
use Entities\DadosXml;
use Entities\Pdv;


class ServiceController extends Controller
{
    /**
     * @AllowAccess
     */
    public function Index()
    {
        echo "/Request/Service - OK";
    }
} 