<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * TODO: remove any url queries
     * Validate Upwork Link.
     *
     * @param  string  $upworkLink
     * @return string
     */
    public function validateUpworkLink($upworkLink): string
    {
        return Str::of($upworkLink)->trim()->replace(' ', '');
    }
}
