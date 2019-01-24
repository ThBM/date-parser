<?php

namespace DateParser;

class DateParser
{
    const PATTERN_FR = "(0?[1-9]|[12][0-9]|3[01])/(0?[1-9]|1[012])(/(\d\d|(19|20)\d\d))?";

    static function parseFromFrString($string): ?\DateTimeInterface {
        $date = \DateTime::createFromFormat("d/m", $string);
        if(!$date) $date = \DateTime::createFromFormat("d/m/y", $string);
        if(!$date) $date = \DateTime::createFromFormat("d/m/Y", $string);
        if(!$date) return null;
        $date->setTime(0,0);
        return $date;
    }
}