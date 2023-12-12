@push('stylesheets')
    @vite(['resources/scss/demo-b.scss'])
@endpush

@push('body-scripts')
    @vite(['resources/js/demo-b.js'])
@endpush

<x-layout>
    <h1>Demo B</h1>

    <nav class="demo-b-page-nav">
        <a href="#details">Details and Summary</a>
        <a href="#dialog">Dialog</a>
        <a href="#popover">Popover API</a>
    </nav>

    <h2 id="details">
        <code>&lt;details&gt;</code> and <code>&lt;summary&gt;</code>
    </h2>

    <p class="support"><em>98% support.</em></p>

    <p>A pair of elements for creating collapsible content.</p>

    <ul>
        <li>Easily styled, including open/closed states thanks to `open` attribute.</li>
        <li>Animating open/close is possible but a little gross. It's either complicated (Web Animations API) or hacky
            (hidden checkbox stuff).
        </li>
    </ul>

    <hr>

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

    <h2 id="dialog">
        <code>&lt;dialog&gt;</code>
    </h2>

    <p>An element and JS API for creating a box or other interactive component, such as a dismissible alert, inspector,
        or
        subwindow.</p>

    <ul>
        <li>A very simple <code>&lt;dialog&gt;</code> can be implemented without JS.</li>
        <li>Most cases will require a little JS. But the API is simple.</li>
        <li>Accessibility for dialog-like UI elements is complicated, but it's all built-in with
            <code>&lt;dialog&gt;</code>.
        </li>
        <li><code>&lt;dialog&gt;</code> has two modes: <em>modal</em> and <em>non-modal</em> or <em>modeless</em>.</li>
    </ul>

    <hr>

    <button class="open-dialog"
            data-target="dialog.regular">Regular Dialog
    </button>

    <button class="open-dialog"
            data-target="dialog.modal">Modal Dialog
    </button>

    <button class="open-dialog"
            data-target="dialog.slide-in">Slide-in Panel
    </button>

    <button class="open-dialog"
            data-target="dialog.toast">Toast Alert
    </button>

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

    <h2 id="popover"><code>Popover API</code></h2>

    <p>A set of HTML attributes and JS API for creating and controlling dialog-like behavior in other kinds of elements.</p>

    <p><code>popover</code> vs <code>&lt;dialog&gt;</code>:</p>

    <ul>
        <li>Popovers are never modal, <code>&lt;dialog&gt;</code> can be.</li>
        <li>Always in the top layer. <code>&lt;dialog&gt;</code> only in top layer when modal.</li>
        <li>Can be completely controlled via HTML, no JS required.</li>
        <li>"light dismiss", click outside to hide.</li>
        <li>No focus trapping, but does affect focus navigation order.</li>
        <li>Can always be closed with <code>Esc</code> key. <code>&lt;dialog&gt;</code> only closed if modal.</li>
    </ul>

    <hr>

    <button popovertarget="basic-popover">Toggle Default Popover</button>

    <button popovertarget="corner-popover">Toggle Corner Popover</button>

    <button popovertarget="corner-popover"
            popovertargetaction="show">Open Corner Popover
    </button>

    <button popovertarget="corner-popover"
            popovertargetaction="hide">Close Corner Popover
    </button>

    <button popovertarget="manual-popover">Toggle Manual Popover
    </button>

    <button popovertarget="backdrop-popover">Toggle Backdrop Popover</button>

    <button popovertarget="animated-popover">Toggle Animated Popover</button>

    <button popovertarget="dialog-popover">Toggle Dialog Popover</button>

    <button>Extra Button</button>

    <div id="basic-popover"
         popover>
        <p>So basic.</p>

        <button popovertarget="basic-popover">Close</button>
    </div>

    <div id="corner-popover"
         class="styled corner"
         popover>
        <p>In your corner.</p>

        <button popovertarget="corner-popover">Close</button>
    </div>

    <div id="manual-popover"
         class="styled corner"
         popover="manual">
        <p>Close me like you mean it.</p>

        <button popovertarget="manual-popover">Close</button>
    </div>

    <div id="backdrop-popover"
         class="styled backdrop"
         popover>
        <p>All eyes on me.</p>

        <button popovertarget="backdrop-popover">Close</button>
    </div>

    <div id="animated-popover"
         class="animated styled corner"
         popover>
        <p>Soooo smoooooth.</p>

        <button popovertarget="animated-popover">Close</button>
    </div>

    <dialog id="dialog-popover" class="styled corner" popover>
        <p>Dialog! Popover!</p>

        <button popovertarget="dialog-popover">Close</button>
    </dialog>

</x-layout>
