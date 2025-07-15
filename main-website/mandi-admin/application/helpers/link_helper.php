<?php

if (! function_exists('link_is_active')) {
    function link_is_active($url = null, $group = false)
    {
        if (is_null($url)) {
            return ['show' => false, 'active' => false, 'expand' => false];
        } else {
            if ($group) {
                return (in_array((explode(base_url(), current_url()))[1], $url)) ? ['show' => true, 'active' => true, 'expand' => true] : ['show' => false, 'active' => false, 'expand' => false];
            } else {
                return ((explode(base_url(), current_url()))[1] == $url) ? ['show' => true, 'active' => true, 'expand' => true] : ['show' => false, 'active' => false, 'expand' => false];
            }
        }
    }
}

if (! function_exists('slugify')) {
    function slugify($text, string $divider = '-')
    {
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, $divider);

        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
}
