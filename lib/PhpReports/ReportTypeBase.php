<?php

abstract class ReportTypeBase
{
    public static function init(&$report)
    {
    }

    public static function openConnection(&$report)
    {
    }

    public static function closeConnection(&$report)
    {
    }

    public static function getVariableOptions($params, &$report)
    {
        return [];
    }

    public static function run(&$report)
    {
    }
}
