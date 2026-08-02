// Regenerate inc/logo-data.php: the brand wordmark is inlined as base64 on
// EVERY page (header = dark, footer = light). The source PNGs are 120–144 KB
// each; displayed at 40 px / 64 px tall they only need a small webp. This turns
// ~350 KB of per-page base64 into ~15 KB with no visible quality loss.
import { createRequire } from 'node:module';
import { readFileSync, writeFileSync } from 'node:fs';
import path from 'node:path';
import { fileURLToPath } from 'node:url';

const require = createRequire(
  path.resolve(fileURLToPath(import.meta.url), '../../../revizie-app/content-site/package.json'),
);
const sharp = require('sharp');
const IMG = path.resolve(fileURLToPath(import.meta.url), '../../assets/img');
const OUT = path.resolve(fileURLToPath(import.meta.url), '../../inc/logo-data.php');

async function webpB64(file, height) {
  const buf = await sharp(readFileSync(path.join(IMG, file)))
    .resize({ height, withoutEnlargement: true })
    .webp({ quality: 90, effort: 6 })
    .toBuffer();
  return { b64: buf.toString('base64'), bytes: buf.length };
}

// header img is h-10 (40px) -> 96px covers 2x; footer is h-16 (64px) -> 144px.
const dark = await webpB64('logo-dark.png', 96);
const light = await webpB64('logo-light.png', 144);

const php = `<?php
// Auto-generated (scripts/regen-logo-data.mjs). Brand wordmark inlined as
// base64 so it deploys with the PHP and never depends on the host serving theme
// binary assets. Small webp (header 40px / footer 64px display) — was ~350 KB
// of PNG, now ~${((dark.bytes + light.bytes) / 1024).toFixed(0)} KB total.
if (!defined('REVIZIE_LOGO_DARK_DATAURI'))  define('REVIZIE_LOGO_DARK_DATAURI',  'data:image/webp;base64,${dark.b64}');
if (!defined('REVIZIE_LOGO_LIGHT_DATAURI')) define('REVIZIE_LOGO_LIGHT_DATAURI', 'data:image/webp;base64,${light.b64}');
`;

writeFileSync(OUT, php);
console.log(`logo-dark  -> webp 96h  ${(dark.bytes / 1024).toFixed(1)} KB`);
console.log(`logo-light -> webp 144h ${(light.bytes / 1024).toFixed(1)} KB`);
console.log(`inc/logo-data.php regenerated (${(php.length / 1024).toFixed(1)} KB).`);
