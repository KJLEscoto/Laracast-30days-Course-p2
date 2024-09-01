@props(['label', 'name'])

<div class="space-y-3">
    @if ($label)
        <x-forms.label :$name :$label />
    @endif

    <div>
        {{ $slot }}

        <x-forms.error :error="$errors->first($name)" />
    </div>
</div>