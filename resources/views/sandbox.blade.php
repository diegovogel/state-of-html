@push('stylesheets')
    @vite(['resources/scss/sandbox.scss'])
@endpush

@push('body-scripts')
    @vite(['resources/js/sandbox.js'])
@endpush

<x-layout>
    <h1>Sandbox</h1>

    <button popovertarget="mypopover" popovertargetaction="show">Click Me</button>

    <div id="mypopover" popover>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam
        malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.

        <button popovertarget="mypopover">Close</button>
    </div>
</x-layout>
