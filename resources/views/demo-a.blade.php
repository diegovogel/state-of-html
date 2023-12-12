@push('stylesheets')
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.12.0/cdn/themes/light.css"/>
    <script type="module"
            src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.12.0/cdn/shoelace-autoloader.js"></script>
@endpush

<x-layout>
    <h1>Demo A</h1>

    <p>Scan the QR code to view the MDN <code>capture</code> demo.</p>

    <sl-qr-code value="https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/capture#try_it"></sl-qr-code>

    <style>
        sl-qr-code::part(base) {
            width: 80vh;
            height: 80vh;
        }
    </style>
</x-layout>
