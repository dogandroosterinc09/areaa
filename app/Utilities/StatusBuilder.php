<?php


namespace App\Utilities;


class StatusBuilder
{
    private static $builder;

    private function __construct() {}

    public static function response()
    {
        if (empty(self::$builder))
            self::$builder = new StatusBuilder();

        return self::$builder;
    }

    public function success($message, $data)
    {
        return [
            'status' => true,
            'message' => [$message],
            'data' => $data
        ];
    }

    public function error($message, $data)
    {
        return [
            'status' => false,
            'message' => [$message],
            'data' => $data
        ];
    }
}