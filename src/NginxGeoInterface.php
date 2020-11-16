<?php

namespace Scaleplan\NginxGeo;

/**
 * Интерфейс доступа к гео-данным
 *
 * Interface NginxGeoInterface
 *
 * @package Scaleplan\NginxGeo
 */
interface NginxGeoInterface
{
    /**
     * Получить IP
     *
     * @return string
     */
    public function getIP(): string;

    /**
     * Получить код страны
     *
     * @return string
     */
    public function getCountryCode(): string;

    /**
     * Получить код региона
     *
     * @return string
     */
    public function getRegionCode(): string;

    /**
     * Получить название города
     *
     * @return string
     */
    public function getCity(): string;
}