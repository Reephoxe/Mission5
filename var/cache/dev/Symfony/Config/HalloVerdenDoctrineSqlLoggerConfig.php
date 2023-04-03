<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'HalloVerdenDoctrineSqlLogger'.\DIRECTORY_SEPARATOR.'LoggersConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class HalloVerdenDoctrineSqlLoggerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $loggers;
    private $_usedProperties = [];

    public function loggers(array $value = []): \Symfony\Config\HalloVerdenDoctrineSqlLogger\LoggersConfig
    {
        $this->_usedProperties['loggers'] = true;

        return $this->loggers[] = new \Symfony\Config\HalloVerdenDoctrineSqlLogger\LoggersConfig($value);
    }

    public function getExtensionAlias(): string
    {
        return 'hallo_verden_doctrine_sql_logger';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('loggers', $value)) {
            $this->_usedProperties['loggers'] = true;
            $this->loggers = array_map(function ($v) { return new \Symfony\Config\HalloVerdenDoctrineSqlLogger\LoggersConfig($v); }, $value['loggers']);
            unset($value['loggers']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['loggers'])) {
            $output['loggers'] = array_map(function ($v) { return $v->toArray(); }, $this->loggers);
        }

        return $output;
    }

}
