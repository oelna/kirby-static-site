# Kirby CMS → Static Site → Github Pages

Uses [kirby3-static-site-generator](https://github.com/d4l-data4life/kirby3-static-site-generator) to build a static version of your site.
Clone including submodules, so the plugin gets set up correctly.

Obviously, the Panel is not supported in this. Edit the `content` manually, like old times.

If you'd like to use this, I guess you only need the `.github/workflows/build.yml` file and the `/build` dir.
Whenever you push changes to the repo, the static site gets rebuilt.

Demo: https://oelna.github.io/kirby-static-site (Original Kirby StarterKit content)
