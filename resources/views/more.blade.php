<x-layout>
    <h1>But Wait, There's More</h1>

    <details>
        <summary><code>loading="lazy"</code></summary>

        <p class="support"><em>95% support.</em></p>

        <p>Tell the browser to lazy load an image or iframe.</p>
    </details>

    <details>
        <summary><code>&lt;datalist&gt;</code></summary>

        <p class="support"><em>97% support.</em></p>

        <p>A way to create a list of suggestions for an input.</p>

        <p>How it differs from <code>&lt;select&gt;</code>:</p>

        <ul>
            <li>Can be used with several types of inputs.</li>
            <li>Typing filters the list.</li>
            <li>User can enter an arbitrary value.</li>
        </ul>

        <p><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/datalist"
              target="_blank">View on MDN.</a></p>
    </details>

    <details>
        <summary><code>inert</code> attribute</summary>

        <p class="support"><em>92% support.</em></p>

        <p>Completely disables interaction with an element and its descendants and hides them from assistive
            devices.</p>
    </details>

    <details>
        <summary><code>blocking="render"</code></summary>

        <p class="support">71% support, but can be a progressive enhancement.</p>

        <p>Tells the browser to block rendering until a resource is loaded and evaluated.</p>

        <p>Stylesheets and scripts in <code>&lt;head&gt;</code> automatically block rendering already. But in some cases it's useful to be explicit:</p>

        <ul>
            <li>Critical fonts added via <code>&lt;link&gt;</code>.</li>
            <li>Stylesheets and scripts inserted dynamically by other scripts.</li>
            <li>Async scripts for things like A/B testing. Allows these to load asynchronously but still waits for them to finish evaluating before rendering.</li>
        </ul>
    </details>

    <details>
        <summary><code>fetchpriority</code> attribute</summary>

        <p class="support"><em>70% support, but can be progressive enhancement.</em></p>

        <p>Tells the browser to prioritize loading a resource over others, thereby enabling <em>some</em> control over
            how images and linked resources load.</p>
    </details>

    <h2>Go take the survey!</h2>

    <style>
        details {
            border: solid 1px #cbd5e0;
            padding: 0.6em;
            border-radius: 0.5em;
            margin: 0.5em;
        }
    </style>
</x-layout>
