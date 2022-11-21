<?php

namespace Decrypter;

class Exporter
{
    public static function export($accounts, $format, $destFile)
    {
        $format = strtolower($format);

        switch ($format) {
            case 'lastpass':
            default:
                self::exportLastpass($accounts, $destFile);
                break;
        }
    }

    protected static function exportLastpass($accounts, $destFile)
    {
        $csv = fopen($destFile, 'w');
        $header = [
            'url', 'type', 'username', 'password', 'hostname',
            'extra', 'name', 'grouping', 'notes', 'tag'
        ];

        fputcsv($csv, $header);

        foreach ($accounts as $account) {
            $line = [
                $account['url'],
                '', // Type.
                $account['login'], // Username.
                $account['password'], //Password.
                '', // Hostname.
                'Client: ' . $account['client'], //Extra.
                $account['name'], // Name.
                $account['category'], // Grouping.
                $account['notes'], // Notes.
                $account['tag'], // Tag.
            ];

            fputcsv($csv, $line);
        }
    }

}
