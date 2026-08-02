// One-off: shrink the theme's oversized landing images that get inlined as
// base64 into the homepage HTML (functions.php `revizie_img_datauri`). The old
// RomArg host wouldn't serve theme binaries, so the theme inlines them — which
// bloated the document to 1.17 MB. Making the source files small keeps the
// inline approach working while cutting the HTML ~75%.
//
// Run: node scripts/shrink-landing-images.mjs
// sharp is borrowed from ../revizie-app/content-site/node_modules.
import { createRequire } from 'node:module';
import { readFileSync, writeFileSync, statSync } from 'node:fs';
import path from 'node:path';
import { fileURLToPath } from 'node:url';

const require = createRequire(
  path.resolve(fileURLToPath(import.meta.url), '../../../revizie-app/content-site/package.json'),
);
const sharp = require('sharp');

const IMG = path.resolve(fileURLToPath(import.meta.url), '../../assets/img');

// filename -> { maxW, q }  (webp output; kept at same filename)
const targets = {
  'audi-car.webp':    { maxW: 1000, q: 76 },
  'phone-app.webp':   { maxW: 440,  q: 80 },
  'phones-group.webp':{ maxW: 1000, q: 76 },
  'laptop-app.webp':  { maxW: 1000, q: 76 },
  'key.webp':         { maxW: 760,  q: 78 },
};

const kb = (n) => (n / 1024).toFixed(1) + ' KB';

for (const [file, { maxW, q }] of Object.entries(targets)) {
  const p = path.join(IMG, file);
  const src = readFileSync(p);
  const before = src.length;
  const meta = await sharp(src).metadata();
  let pipe = sharp(src);
  if (meta.width > maxW) pipe = pipe.resize({ width: maxW, withoutEnlargement: true });
  const out = await pipe.webp({ quality: q, effort: 6 }).toBuffer();
  if (out.length < before) {
    writeFileSync(p, out);
    console.log(`${file.padEnd(20)} ${meta.width}x${meta.height} ${kb(before)} -> ${maxW >= meta.width ? meta.width : maxW}w ${kb(out.length)}  (-${(100 - (out.length / before) * 100).toFixed(0)}%)`);
  } else {
    console.log(`${file.padEnd(20)} ${kb(before)} already small (skipped)`);
  }
}

// Insurer logos: small but many; a light pass trims each a bit.
const insurers = ['groupama','omniasig','allianz','generali','asirom','grawe','axeria','eazy_insure','hellas_nextins','hellas_autonom'];
for (const slug of insurers) {
  const p = path.join(IMG, 'insurers', `${slug}.webp`);
  let src;
  try { src = readFileSync(p); } catch { continue; }
  const before = src.length;
  const meta = await sharp(src).metadata();
  let pipe = sharp(src);
  if (meta.width > 220) pipe = pipe.resize({ width: 220, withoutEnlargement: true });
  const out = await pipe.webp({ quality: 82, effort: 6 }).toBuffer();
  if (out.length < before) {
    writeFileSync(p, out);
    console.log(`insurers/${slug.padEnd(16)} ${kb(before)} -> ${kb(out.length)}`);
  }
}
