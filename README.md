# Kirby CMS → Static Site → Github Pages

Uses [kirby3-static-site-generator](https://github.com/d4l-data4life/kirby3-static-site-generator) to build a static version of your site.
Clone including submodules, so the plugin gets set up correctly.

Obviously, the Panel is not supported in this. Edit the `content` manually, like old times.

If you'd like to use this, I guess you only need the `.github/workflows/build.yml` file and the `/build` dir.
Whenever you push changes to the repo, the static site gets rebuilt.

Demo: https://oelna.github.io/kirby-static-site (Original Kirby StarterKit content)

## Todo

- Handle custom domains via CNAME
- Maybe only watch changes to certain dirs (https://stackoverflow.com/a/63822945/3625228)
  ```yml
  on:
  push:
    paths:
      - content/**
      - assets/**
  ```

## Sponsoring

I left the original funding info for the Kirby repo intact, but in case you find this useful, I have a [GitHub sponsoring page](https://github.com/sponsors/oelna) and greatly appreciate any $ you can throw my way :)

And obviously, you still have to buy a Kirby license if you use this in production.
