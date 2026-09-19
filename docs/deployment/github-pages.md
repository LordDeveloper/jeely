---
title: GitHub Pages
parent: Deployment
nav_order: 1
---

# Publish documentation on GitHub Pages

This repository includes a Jekyll site in the `docs/` folder, ready for GitHub Pages.

## Prerequisites

- GitHub repository with push access
- `docs/` folder at repository root (already included)

## Step 1 — Push the docs folder

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

## Step 2 — Enable GitHub Pages

1. Open your repository on GitHub.
2. Go to **Settings** → **Pages**.
3. Under **Build and deployment** → **Source**, select **Deploy from a branch**.
4. Choose branch: `main` (or `master`).
5. Choose folder: **`/docs`**.
6. Click **Save**.

GitHub builds the site with Jekyll (may take 1–3 minutes).

## Step 3 — Open your site

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
