<?php

// Helper methods

use App\Partial;

if (! function_exists('get_partial')) {
    /**
     * Returns file path for a giving type and actual domain
     * @param string $type
     * @return mixed
     */
   function get_partial(string $type)
   {
       $domain = app('request')->getHost();
       $path = (new Partial())->path($domain);

       return $path;
   }
}
