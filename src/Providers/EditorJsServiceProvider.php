<?php

declare(strict_types=1);

namespace AkostDev\EditorJs\Providers;

use Illuminate\Support\ServiceProvider;

final class EditorJsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'akost-editorjs');

        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/akost-editorjs'),
        ], ['moonshine-editorjs-assets', 'laravel-assets']);
    }
}
