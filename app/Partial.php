<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partial extends Model
{
    const KEY_LOGO = 'logo';

    /**
     * @param string $domain
     * @return string
     */
    public function path(string $domain): string
    {
        return $this->router()[$domain];
    }

    /**
     * Returns the array path mapping for domain partials
     * @return array
     */
    private function router(): array
    {
        return [
            'test.tipoff.dev' => 'partials.folder'
        ];
    }
}
