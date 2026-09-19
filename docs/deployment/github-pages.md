---
title: GitHub Pages
parent: Deployment
nav_order: 1
---

# Publish documentation on GitHub Pages

This repository includes a Jekyll site in the `docs/` folder, ready for GitHub Pages.

**Live URL (after setup):** [https://lorddeveloper.github.io/jeely/](https://lorddeveloper.github.io/jeely/)

## Choose a deployment method

| Method | Pros | One-time setup |
|--------|------|----------------|
| **GitHub Actions** (recommended) | Auto-build on every push to `docs/` | Enable Pages → GitHub Actions |
| **Deploy from branch** | No workflow needed | Enable Pages → branch `master` → `/docs` |

---

## Method A — GitHub Actions (recommended)

The repo includes `.github/workflows/pages.yml`. It builds Jekyll on every push.

### Step 1 — Enable GitHub Pages

1. Open [github.com/LordDeveloper/jeely/settings/pages](https://github.com/LordDeveloper/jeely/settings/pages)
2. Under **Build and deployment** → **Source**, select **GitHub Actions**
3. Save

### Step 2 — Run the workflow

Push to `master` (already done) or manually re-run:

1. Go to [Actions → Deploy documentation to GitHub Pages](https://github.com/LordDeveloper/jeely/actions/workflows/pages.yml)
2. Click **Run workflow**

First successful deploy takes 1–3 minutes. Site URL:

```
https://lorddeveloper.github.io/jeely/
```

---

## Method B — Deploy from branch (`/docs`)

If you prefer Jekyll build on GitHub without Actions:

1. Open [Settings → Pages](https://github.com/LordDeveloper/jeely/settings/pages)
2. **Source:** Deploy from a branch
3. **Branch:** `master` — **Folder:** `/docs`
4. Save

GitHub builds Jekyll automatically from the `docs/` folder.

---

## Push the docs folder (already done)

Make sure these files exist in your repo:

```
docs/
├── _config.yml
├── Gemfile
├── index.md
├── getting-started/
├── guide/
├── examples/
└── deployment/
```

Commit and push to `main` (or your default branch):

```bash
git add docs/
git commit -m "Add documentation site"
git push origin main
```

## Open your site

Default URL format:

```
https://<username>.github.io/<repository>/
```

Examples:

- User `LordDeveloper`, repo `jeely` → `https://lorddeveloper.github.io/jeely/`
- User `myname`, repo `jeely` → `https://myname.github.io/jeely/`

Check deployment status under **Settings → Pages** or the **Actions** tab.

## Configure base URL

Edit `docs/_config.yml` to match your GitHub username and repo name:

```yaml
title: Jeely
baseurl: /jeely          # repository name (with leading slash)
url: https://lorddeveloper.github.io   # your GitHub Pages domain
```

{: .important }
If `baseurl` is wrong, CSS and internal links will break. For a **user/organization site** (`username.github.io` repo), set `baseurl:` empty and `url: https://username.github.io`.

### User site vs project site

| Site type | Repository name | baseurl |
|-----------|-----------------|---------|
| Project site | `jeely` | `/jeely` |
| User/org site | `username.github.io` | `` (empty) |

## Local preview

Install Ruby and Bundler, then:

```bash
cd docs
bundle install
bundle exec jekyll serve
```

Open `http://127.0.0.1:4000/jeely/` (include baseurl path).

On Windows, use [RubyInstaller](https://rubyinstaller.org/) + `gem install bundler`.

## Theme

The site uses [just-the-docs](https://github.com/just-the-docs/just-the-docs) via `remote_theme` — no theme files need to be committed.

Features enabled:

- Sidebar navigation (from front matter `parent` / `nav_order`)
- Full-text search
- Syntax highlighting (Rouge)

## Customize navigation

Each markdown file has front matter:

```yaml
---
title: Installation
parent: Getting Started
nav_order: 1
---
```

- `title` — page title in sidebar
- `parent` — group name (creates sections)
- `nav_order` — sort order within group

## Custom domain (optional)

1. Add a `CNAME` file in `docs/` with your domain: `docs.example.com`
2. Configure DNS CNAME pointing to `<username>.github.io`
3. Enable **Enforce HTTPS** in Pages settings

## Troubleshooting

| Problem | Fix |
|---------|-----|
| 404 on all pages | Check branch/folder in Pages settings |
| Broken CSS / styles | Fix `baseurl` in `_config.yml` |
| Build failed | Check Actions log; ensure `plugins` are allowed |
| Links 404 locally | Use `bundle exec jekyll serve` with correct baseurl |

### Allowed plugins on GitHub Pages

GitHub Pages whitelists certain Jekyll plugins. `jekyll-remote-theme`, `jekyll-seo-tag`, and `jekyll-github-metadata` are supported.

## Link docs from README

Add to your root `README.md`:

```markdown
📖 [Full documentation](https://lorddeveloper.github.io/jeely/)
```

Replace the URL with your actual GitHub Pages address.

[← Home](../index)
