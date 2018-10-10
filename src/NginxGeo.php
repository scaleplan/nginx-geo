<?php

namespace Scaleplan\NginxGeo;

use Scaleplan\GetInstance\GetInstanceTrait;

/**
 * Работа с гео-данными, переданными от Nginx
 *
 * Class NginxGeo
 *
 * @package Scaleplan\NginxGeo
 */
class NginxGeo implements NginxGeoInterface
{
    use GetInstanceTrait;

    /**
     * IP-адрес клиента
     *
     * @var string
     */
    protected $ip;

    /**
     * Код страны
     *
     * @var string
     */
    protected $countryCode;

    /**
     * Код региона
     *
     * @var string
     */
    protected $regionCode;

    /**
     * Название города
     *
     * @var string
     */
    protected $city;

    /**
     * Конструктор
     *
     * @param array $get
     */
    protected function __construct(
        array $get = []
    ) {
        $this->ip = $_SERVER['REMOTE_ADDR'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? '';
        $this->countryCode = $get['nginx_country_code'] ?? '';
        $this->regionCode = $get['nginx_region_code'] ?? '';
        $this->city = $get['nginx_city'] ?? '';
    }

    /**
     * Вернуть IP-адрес
     *
     * @return string
     */
    public function getIP(): string
    {
        return $this->ip;
    }

    /**
     * Вернуть код страны
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * Вернуть код региона
     *
     * @return string
     */
    public function getRegionCode(): string
    {
        return $this->regionCode;
    }

    /**
     * Вернуть название города
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
}