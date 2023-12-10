@push('stylesheets')
    @vite(['resources/scss/sandbox.scss'])
@endpush

@push('body-scripts')
    @vite(['resources/js/sandbox.js'])
@endpush

<x-layout>
    <h1>Sandbox</h1>

    <button class="open">Open</button>

    <dialog>
        Here's a little message.

        <button class="close">OK</button>
    </dialog>
</x-layout>
