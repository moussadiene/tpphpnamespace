<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

function getEntitiyManager()
{
    // Create a simple "default" Doctrine ORM configuration for Annotations
    $isDevMode = true;
    $proxyDir = null;
    $cache = null;
    $useSimpleAnnotationReader = false;
    $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/application/entities"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
    // or if you prefer yaml or XML
    //$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
    //$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

    // database configuration parameters
    $conn = array(
        'dbname'    => 'bpeuple',
        'user'      => 'root',
        'password'  => 'passer123',
        'host'      => '127.0.0.1',
        'driver' => 'pdo_mysql',
        'path' => __DIR__ . '/db.sqlite',
    );

    // obtaining the entity manager
    return EntityManager::create($conn, $config);
}

