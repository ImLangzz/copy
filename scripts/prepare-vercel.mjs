import { cp, mkdir, rm } from 'node:fs/promises';

const outputDirectory = 'dist';
const publicFiles = ['build', 'images', 'favicon.ico', 'robots.txt'];

await rm(outputDirectory, { recursive: true, force: true });
await mkdir(outputDirectory, { recursive: true });

for (const file of publicFiles) {
    await cp(`public/${file}`, `${outputDirectory}/${file}`, { recursive: true });
}