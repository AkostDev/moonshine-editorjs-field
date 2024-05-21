<?php

declare(strict_types=1);

namespace AkostDev\EditorJs\Fields;

use MoonShine\Fields\Field;

final class EditorJs extends Field
{
    protected string $view = 'akost-editorjs::fields.editorjs';

    protected array $assets = [
        'vendor/akost-editorjs/js/package.js',
    ];
}
