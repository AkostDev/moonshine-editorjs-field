<div
    class="form-textarea prose"
    x-data="AkostEditorJs({{ $value }})"
    @input="saveData"
>
    <textarea
        class="hidden"
        name="{{ $element->name() }}"
        x-model="data"
    ></textarea>
</div>

