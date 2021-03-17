<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04152a9b1f46e1882739ec6aa41915f2
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'UAParser\\' => 9,
        ),
        'C' => 
        array (
            'Composer\\CaBundle\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'UAParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/ua-parser/uap-php/src',
        ),
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
    );

    public static $classMap = array (
        'Composer\\CaBundle\\CaBundle' => __DIR__ . '/..' . '/composer/ca-bundle/src/CaBundle.php',
        'UAParser\\AbstractParser' => __DIR__ . '/..' . '/ua-parser/uap-php/src/AbstractParser.php',
        'UAParser\\Command\\ConvertCommand' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Command/ConvertCommand.php',
        'UAParser\\Command\\FetchCommand' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Command/FetchCommand.php',
        'UAParser\\Command\\LogfileCommand' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Command/LogfileCommand.php',
        'UAParser\\Command\\ParserCommand' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Command/ParserCommand.php',
        'UAParser\\Command\\UpdateCommand' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Command/UpdateCommand.php',
        'UAParser\\DeviceParser' => __DIR__ . '/..' . '/ua-parser/uap-php/src/DeviceParser.php',
        'UAParser\\Exception\\DomainException' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Exception/DomainException.php',
        'UAParser\\Exception\\FetcherException' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Exception/FetcherException.php',
        'UAParser\\Exception\\FileNotFoundException' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Exception/FileNotFoundException.php',
        'UAParser\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Exception/InvalidArgumentException.php',
        'UAParser\\Exception\\ReaderException' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Exception/ReaderException.php',
        'UAParser\\OperatingSystemParser' => __DIR__ . '/..' . '/ua-parser/uap-php/src/OperatingSystemParser.php',
        'UAParser\\Parser' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Parser.php',
        'UAParser\\Result\\AbstractClient' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Result/AbstractClient.php',
        'UAParser\\Result\\AbstractSoftware' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Result/AbstractSoftware.php',
        'UAParser\\Result\\AbstractVersionedSoftware' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Result/AbstractVersionedSoftware.php',
        'UAParser\\Result\\Client' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Result/Client.php',
        'UAParser\\Result\\Device' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Result/Device.php',
        'UAParser\\Result\\OperatingSystem' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Result/OperatingSystem.php',
        'UAParser\\Result\\UserAgent' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Result/UserAgent.php',
        'UAParser\\UserAgentParser' => __DIR__ . '/..' . '/ua-parser/uap-php/src/UserAgentParser.php',
        'UAParser\\Util\\Converter' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Util/Converter.php',
        'UAParser\\Util\\Fetcher' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Util/Fetcher.php',
        'UAParser\\Util\\Logfile\\AbstractReader' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Util/Logfile/AbstractReader.php',
        'UAParser\\Util\\Logfile\\ApacheCommonLogFormatReader' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Util/Logfile/ApacheCommonLogFormatReader.php',
        'UAParser\\Util\\Logfile\\ReaderInterface' => __DIR__ . '/..' . '/ua-parser/uap-php/src/Util/Logfile/ReaderInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit04152a9b1f46e1882739ec6aa41915f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04152a9b1f46e1882739ec6aa41915f2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit04152a9b1f46e1882739ec6aa41915f2::$classMap;

        }, null, ClassLoader::class);
    }
}