<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
date_default_timezone_set('America/Sao_Paulo');
ini_set('memory_limit', '-1');
/**
 * NAO REMOVER NENHUM CAMPO DESTE ARQUIVO, SE NECESSARIO APENAS FAZER ALTERAÇÕES
 */

/**
 * DEFAULT para PATH
 */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__). DS);
define('XMLSPATH', ROOT . "public" . DS . "xmls");
define('USERSIMAGES',ROOT . "public" . DS . "assets" . DS . "img" . DS . "users" . DS);
define('PROMOTIONSIMAGES',ROOT . "public" . DS . "assets" . DS . "img" . DS . "promocoes" . DS);

/**
 * DEFINIÇÃO DE CONSTANTES PARA URL
 */
define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);
define('ASSETS', URL . 'assets');
define('UPLOADS', URL . 'Class/Download');
define("SIMULADO", URL . 'uploads/images');

define("MAIL_HOST", "mail.servidoremail.com");
define("MAIL_USER", "email@servidoremail.com");
define("MAIL_PASS", "senhaEmail");
define("MAIL_NAME", "Nome Usuario Email");

/**
 * Caso mudar o padrao Application, mudar no composer e gerar os autoloads
 */
define('FOLDER_SRC','Application');
define('APP', ROOT . FOLDER_SRC . DS);
define('VENDOR', ROOT . 'vendor' . DS);

define("ALCATRAZ", VENDOR . "alcatraz" . DS);
define('PATH_AREA',       APP . 'Areas' . DS);
define('PATH_CONTROLLER', APP . 'Controllers' . DS);
define('PATH_LAYOUT', APP . 'Layouts' . DS);
define('PATH_VIEWS',      APP . 'Views' . DS);
define("LOG_PATH" , VENDOR . "alcatraz" . DS . "logs");
define("PATH_VALIDATORS", ALCATRAZ . 'modelstate'. DS . "Alcatraz" . DS . "ModelState" . DS . "Validators" . DS);
define("UPLOAD_PATH", ROOT . "public" . DS . "uploads" . DS);
define("IMAGES_SIMULADO", UPLOAD_PATH . "images" . DS);
/**
 * Namespaces
 */
define('NAMESPACE_AREAS', 'Areas');
define('NAMESPACE_CONTROLLER', 'Controllers');
define('NAMESPACE_VALIDATORS', 'Alcatraz\\ModelState\\Validators\\');
define('NAMESPACE_ENTITIES', "Entities\\");
/**
 * Em todos os posts de formulario é enviado os dados para uma classe que valida todos os dados antes de retornar.
 */
define("USE_STANDARD_VALIDATOR", true);
/**
 * VARIAVEL DE TIMESTAMP PARA PADRÃO DE ATRIBUTOS
 */
define("CURRENT_TIMESTAMP", date('Y-m-d H:i:s'));
define("CURRENT_DATE", date('Y-m-d'));
/**
 * DEFINIÇÂO DAS VARIAVEIS DE CONEXÂO COM O BD
 */

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'boilerplate');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8');

/**
 * PREFIX PARA ADICIONAR NA ACTION QUANDO EXISTE POST NA TELA
 */
define("PREFIX_POST", "_post");

/**
 * LAYOUT
 */
define('PREFIX_TITLE', 'Boilerplate');
define("DEFAULT_LAYOUT", "basic");
define("DEFAULT_TITLE","Painel");
define("DEFAULT_FAVICON", ASSETS . "/img/favicon.png");
define("DEFAULT_DESC","");
define("DEFAULT_TAGS","");

define("CONTROLLER_404","ErrosController");
define("DEFAULT_CONTROLLER_ABV","Index");
define("DEFAULT_VIEW","Index");

define("ENABLE_SECURITY", false);
