<?php

if (! function_exists('make')) {
    /**
     * @template TClass
     *
     * @param  class-string<TClass>  $abstract
     * @return TClass
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    function make(string $abstract, array $parameters = [])
    {
        return \Illuminate\Container\Container::getInstance()->make($abstract, $parameters);
    }
}
