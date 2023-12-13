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

    <p>Web Components have similar features as other component systems (React, Vue, Blade, etc), including:</p>

    <ul>
        <li>Slots</li>
        <li>Properties</li>
        <li>Events</li>
        <li>Methods</li>
    </ul>

    <p>Making Web Components is a bit too complicated for this demo 😅, so we will use a library called <a href="https://shoelace.style/" target="_blank">Shoelace</a> (it's pretty great, go check it out!) to play around with some Web Component features.</p>

    <hr>

    <div class="shoelace-demos">
        <div class="buttons">
            <sl-button>
                Button
            </sl-button>

            <sl-button size="large">
                Large Button
            </sl-button>

            <sl-button>
                <sl-icon slot="prefix"
                         name="gear"></sl-icon>
                Button with Prefix slot filled
            </sl-button>

            <sl-button class="bold">
                Bold Blue Text
            </sl-button>
        </div>

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

        .buttons {
            display: flex;
            gap: 2em;
            align-items: center;
        }

        .bold::part(label) {
            color: dodgerblue;
            font-weight: bold;
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

            // Reset when we get to 100%.
            if (value >= 100) {
                value = 0;
            }

            // Update every 200ms.
            setTimeout(() => {
                value = value + 2;

                progressBar.setAttribute('value', value);

                // Put the percentage in the default slot of the web component.
                progressBar.innerHTML = value + '%';

                updateProgress();
            }, 200);
        }
    </script>
</x-layout>
