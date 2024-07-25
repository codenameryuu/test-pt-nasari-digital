<?php

namespace App\Helpers;

class MetadataHelper
{
    /**
     ** Metadata.
     *
     * @return object
     */
    public static function metadata()
    {
        $result = (object) [
            'title' => 'Nasari Digital',
            'description' => '',
            'keywords' => '',
        ];

        return $result;
    }
}
