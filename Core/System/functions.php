<?php

use JetBrains\PhpStorm\Pure;

#[Pure] function addJavaScript(string $path, string $url = null): string|bool
{
    if (!is_null($url)) {
        if ($_SERVER['REQUEST_URI'] === ROOT . $url) {
            return (str_starts_with($path, 'http')) ? "<script src=$path></script>" : "<script src=" . SCRIPTS ."$path></script>";
        }

        return false;
    }

    return (str_starts_with($path, 'http')) ? "<script src=$path></script>" : "<script src=" . SCRIPTS ."$path></script>";
}
