<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Utils;

class MultipartMetadata
{
    public string $name;
    public bool $file;
    public bool $content;
    public bool $json;
    public string $dateTimeFormat;

    public static function parse(string $metadata): MultipartMetadata | null
    {
        if (!str_starts_with($metadata, "multipartForm:")) {
            return null;
        }

        $metadata = removePrefix($metadata, "multipartForm:");

        $name = "";
        $file = false;
        $content = false;
        $json = false;
        $dateTimeFormat = "";

        $options = explode(",", $metadata);

        foreach ($options as $opt) {
            $parts = explode("=", $opt);
            if (count($parts) < 1 || count($parts) > 2) { /** @phpstan-ignore-line */
                continue;
            }

            switch ($parts[0]) {
                case "name":
                    $name = $parts[1];
                    break;
                case "file":
                    $file = $parts[1] === "true";
                    break;
                case "content":
                    $content = $parts[1] === "true";
                    break;
                case "json":
                    $json = $parts[1] === "true";
                    break;
                case "dateTimeFormat":
                    $dateTimeFormat = $parts[1];
                    break;
            }
        }

        return new MultipartMetadata($name, $file, $content, $json, $dateTimeFormat);
    }

    private function __construct(string $name, bool $file, bool $content, bool $json, string $dateTimeFormat)
    {
        $this->name = $name;
        $this->file = $file;
        $this->content = $content;
        $this->json = $json;
        $this->dateTimeFormat = $dateTimeFormat;
    }
}
