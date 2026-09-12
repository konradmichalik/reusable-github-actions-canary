// Writes the built site to the default output-dir of pages.yml. The page prints
// PAGES_BASE_PATH so the deployed site is itself the evidence that
// actions/configure-pages populated it — see issue #64.
const fs = require('fs');
const path = require('path');

const out = path.join(__dirname, '.vitepress', 'dist');
const basePath = process.env.PAGES_BASE_PATH;

fs.mkdirSync(out, { recursive: true });
fs.writeFileSync(
    path.join(out, 'index.html'),
    `<!doctype html>
<meta charset="utf-8">
<title>reusable-github-actions canary</title>
<h1>Canary docs</h1>
<p>Deployed by <code>pages.yml</code> of
<a href="https://github.com/konradmichalik/reusable-github-actions">konradmichalik/reusable-github-actions</a>.</p>
<p><strong>PAGES_BASE_PATH:</strong> <code>${basePath === undefined ? '(undefined)' : basePath === '' ? '(empty string)' : basePath}</code></p>
<p>Built at ${new Date().toISOString()}</p>
`
);

console.log('PAGES_BASE_PATH =', JSON.stringify(basePath));
console.log('wrote', path.join(out, 'index.html'));
