@push('stylesheets')
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.12.0/cdn/themes/light.css"/>
    <script type="module"
            src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.12.0/cdn/shoelace-autoloader.js"></script>
@endpush

<x-layout>
    <h1>Demo C: Web Components</h1>

    <p class="support"><em>97% support.</em></p>

    <p>Benefit: framework agnostic. Use <strong>the same components</strong> across multiple websites.</p>

    <p>Features include:</p>

    <ul>
        <li>Slots</li>
        <li>Properties</li>
        <li>Parts</li>
    </ul>

    <hr>

    <div class="shoelace-demos">
        <sl-button>
            Button
        </sl-button>

        <sl-progress-bar value="0"></sl-progress-bar>

        <sl-image-comparer>
            <img
                slot="before"
                src="https://images.unsplash.com/photo-1517331156700-3c241d2b4d83?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80&sat=-100&bri=-5"
                alt="Grayscale version of kittens in a basket looking around."
            />
            <img
                slot="after"
                src="https://images.unsplash.com/photo-1517331156700-3c241d2b4d83?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                alt="Color version of kittens in a basket looking around."
            />
        </sl-image-comparer>
    </div>

    <style>
        .shoelace-demos {
            display: flex;
            flex-direction: column;
            gap: 4em;
            align-items: flex-start;
            padding: 3em 0;
        }

        sl-progress-bar {
            width: 100%;
        }
    </style>

    <script>
        const progressBar = document.querySelector('sl-progress-bar');

        updateProgress();

        function updateProgress() {
            let value = parseInt(progressBar.getAttribute('value'));

            if (value >= 100) {
                value = -20;
            }

            setTimeout(() => {
                progressBar.setAttribute('value', value + 20);
                updateProgress();
            }, 2000);
        }
    </script>
</x-layout>
