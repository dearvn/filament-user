<?php

namespace Dearvn\FilamentUser\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dearvn\FilamentUser\FilamentUser
 */
class FilamentUser extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Dearvn\FilamentUser\FilamentUser::class;
    }
}
