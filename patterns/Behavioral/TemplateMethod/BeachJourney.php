<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

/**
 * Class BeachJourney
 * @package DesignPatterns\Behavioral\TemplateMethod
 */
class BeachJourney extends Journey
{
    /**
     * @return string
     */
    protected function enjoyVacation(): string
    {
        return "Swimming and sun-bathing";
    }
}
