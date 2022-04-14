<?php

namespace IO;

class File{
    public static function  readJson($fileName): mixed{
        if (!file_exists($fileName))return false;
        return json_decode(file_get_contents($fileName), true);
    }

    public static function readAllText($fileName): string|false{
        if (!file_exists($fileName))return false;
        return file_get_contents($fileName);
    }
}