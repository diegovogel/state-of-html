@push('stylesheets')
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.12.0/cdn/themes/light.css"/>
    <script type="module"
            src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.12.0/cdn/shoelace-autoloader.js"></script>
@endpush

<x-layout>
    <h1>Demo A: <code>capture</code> Attribute</h1>

    <p class="support"><em>99.5% support in mobile browsers.</em></p>

    <p>Scan the QR code to view the MDN <code>capture</code> demo.</p>

    <hr>

    <sl-qr-code value="https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/capture#try_it"></sl-qr-code>

    <style>
        sl-qr-code::part(base) {
            width: 80vh;
            height: 80vh;
        }
    </style>
</x-layout>
