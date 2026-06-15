# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this project is

ICTALS (International Conference for Technology and Analysis of Seizures) — a Statamic v6 CMS site built on Laravel 13. Content is stored flat-file in YAML and Markdown under `content/`; there is no relational database for CMS data. Git auto-commits are enabled so content edits made via the Statamic CP are automatically versioned.

## Commands

**Full dev stack** (Laravel server + queue worker + log tail + Vite HMR, all concurrently):
```
composer dev
```

**Frontend only:**
```
npm run dev       # Vite dev server with HMR
npm run build     # Production build
```

**Tests:**
```
composer test
```

**First-time setup:**
```
composer setup
```

**Artisan / Statamic CLI:**
```
php artisan <command>
php please <command>   # Statamic-specific CLI (wraps artisan)
```

## Architecture

### Content layer (`content/`)
Statamic's flat-file store — all CMS-managed data lives here as YAML/Markdown, committed to git.

- `content/collections/events/` — event entries (YAML frontmatter + optional Markdown body). Key fields: `title`, `year`, `location`, `event_url`, `banner_image`, `is_past_event` toggle.
- `content/collections/archive_events/` — older event entries (past = public, future = private behavior).
- `content/globals/quick_links.yaml` — global set with a Zoho Mail URL.
- `content/globals/` also contains `homepage_content` data (mission text, future event info, `is_past_event` toggle that controls home page display).
- `content/structures/pages.yaml` — flat page tree (single-level, no nested pages).

### Blueprints (`resources/blueprints/`)
Define the field schema for each collection and global. Editing these changes what appears in the CP editor.

- `collections/events/event.yaml` — event blueprint
- `collections/archive_events/archive_event.yaml`
- `collections/pages/homepage.yaml` and `page.yaml`
- `globals/homepage_content.yaml` — controls the "Mission" section and the featured future event on the homepage

### Templates (`resources/views/`)
Uses Statamic's Antlers templating engine (`.antlers.html` files).

- `layout.antlers.html` — minimal shell: sets `<head>`, loads Vite assets via `{{ vite }}`, renders `{{ template_content }}`.
- `home.antlers.html` — the entire homepage including header, hero, mission section, events grid, contact, and footer. Contains heavy inline CSS (intentional — not Tailwind). Pulls `{{ mission_lead }}`, `{{ mission_body }}`, `{{ future_event_title }}`, etc. from the `homepage_content` global.
- `events/index.antlers.html`, `events/show.antlers.html` — legacy event detail pages.
- `events/launch-email.blade.php` — Blade template used by the LaunchEmail addon utility.

### Frontend assets (`resources/css/`, `resources/js/`)
- Entry points: `resources/css/site.css` and `resources/js/site.js`, bundled by Vite.
- Tailwind CSS v4 via `@tailwindcss/vite` plugin.
- The homepage template (`home.antlers.html`) uses its own `<style>` block rather than Tailwind classes.

### Custom addon (`addons/LaunchEmail/`)
A local path-repository Statamic addon. Registered via `composer.json` as `launchemail/launchemail` + `launchemail/utility`. It adds a "Zoho Mail" link to the Statamic Control Panel nav (`src/CpNav.php`).

### Key `.env` variables for Statamic
```
STATAMIC_GIT_ENABLED=true        # auto-commits content edits
STATAMIC_GIT_AUTOMATIC=true
STATAMIC_PRO_ENABLED=false
STATAMIC_LICENSE_KEY=
```
The app uses SQLite (only for Laravel session/queue/user auth — CMS content is flat-file).
