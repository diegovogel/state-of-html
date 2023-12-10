@push('stylesheets')
    @vite(['resources/scss/demo-b.scss'])
@endpush

@push('body-scripts')
    @vite(['resources/js/demo-b.js'])
@endpush

<x-layout>
    <h1>Demo B</h1>

    <h2>
        <code>&lt;details&gt;</code> and <code>&lt;summary&gt;</code>
    </h2>

    <details>
        <summary>Basic Example</summary>

        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam
        malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.

        <ul>
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
            <li>Aliquam tincidunt mauris eu risus.</li>
            <li>Vestibulum auctor dapibus neque.</li>
            <li>Nunc dignissim risus id metus.</li>
            <li>Cras ornare tristique elit.</li>
            <li>Vivamus vestibulum ntulla nec ante.</li>
            <li>Praesent placerat risus quis eros.</li>
            <li>Fusce pellentesque suscipit nibh.</li>
            <li>Integer vitae libero ac risus egestas placerat.</li>
        </ul>

        <img src="https://images.unsplash.com/photo-1546853020-ca4909aef454?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
             alt="">
    </details>

    <details class="styled">
        <summary>Styled Example</summary>

        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec
        urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet
        viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse
        potenti.
    </details>

    <p>
        <code>&lt;details&gt;</code> can also be animated with the Web Animations API, though it is non-trivial.
    </p>

    <h2>
        <code>&lt;dialog&gt;</code>
    </h2>

    <p>
        A simple <code>&lt;dialog&gt;</code> can be implemented totally JS-free.
    </p>

    <p>Most cases will require a little JS. But the API is simple.</p>

    <p>
        <code>&lt;dialog&gt;</code> has two modes: regular and modal.
    </p>

    <button class="open-dialog" data-target="dialog.regular">Regular Dialog</button>

    <button class="open-dialog" data-target="dialog.modal">Modal Dialog</button>

    <button class="open-dialog" data-target="dialog.slide-in">Slide-in Panel</button>

    <button class="open-dialog" data-target="dialog.toast">Toast Alert</button>

    <dialog open>
        <p>This dialog uses no JavaScript!!! 🤠</p>

        <form method="dialog">
            <button>OK then...</button>
        </form>
    </dialog>

    <dialog class="regular">
        <p>Just a regular old dialog.</p>

        <button class="close-dialog">Close</button>
    </dialog>

    <dialog class="modal">
        <p>My favorite seal.</p>

        <img src="https://images.unsplash.com/photo-1546853020-ca4909aef454?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
             alt="">

        <button class="close-dialog">Close</button>
    </dialog>

    <dialog class="slide-in">
        <h3>Menu.</h3>

        <ul class="menu-list">
            <li><a href="https://www.example1.com">Example 1</a></li>
            <li><a href="https://www.example2.com">Example 2</a></li>
            <li><a href="https://www.example3.com">Example 3</a></li>
            <li><a href="https://www.example4.com">Example 4</a></li>
            <li><a href="https://www.example5.com">Example 5</a></li>
            <li><a href="https://www.example6.com">Example 6</a></li>
            <li><a href="https://www.example7.com">Example 7</a></li>
            <li><a href="https://www.example8.com">Example 8</a></li>
            <li><a href="https://www.example9.com">Example 9</a></li>
            <li><a href="https://www.example10.com">Example 10</a></li>
        </ul>

        <button class="close-dialog">Close</button>
    </dialog>

    <dialog class="toast">
        I'll go away soon. 👍
    </dialog>

    <h2><code>&lt;popover&gt;</code></h2>
</x-layout>
