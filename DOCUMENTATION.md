# The Publishing Universe

## Overview

A WordPress block theme that powers 5 personal sites as a unified publishing universe. Each site shares typography, spacing, grid, and dark mode behavior — only the identity layer (logo, name) differs. Visitors recognize them as "different rooms in the same home."

## Status

**Phase: Design (approved) — pre-implementation**

The design doc was approved on 2026-03-26 via `/office-hours`. It passed 2 rounds of adversarial spec review (24 issues caught, 20 fixed, 4 persisted as reviewer concerns gated on platform validation).

## Architecture

- **Platform:** WordPress 7.0+, theme.json v3, full block theme
- **Deployment:** WordPress.com (theme ZIP upload to each site)
- **Content modes:** 5 templates (Essay, Single Photo, Gallery, Magazine, Link-in-Bio) selected per post
- **Dark mode:** Dual-surface system — warm paper (#111) for text, near-black (#0a0a0a) for photos
- **Style variations:** 5 JSON files, one per site, sharing all design DNA except identity
- **Typography:** Butterick-compliant, OpenType features via custom CSS layer
- **Cross-site navigation:** Block pattern with CSS-only room highlighting via style variation body classes
- **Specimen page:** Built-in type specimen / style-book template

## Next Steps

0. **Validation spike** — Upload minimal test theme to WordPress.com to verify: custom CSS, style variations, JS via viewScript, body class injection
1. **Font selection** — Professional serif with verified OpenType tables (liga, kern, smcp). Blocking prerequisite for typography CSS.
2. **Theme scaffold** — theme.json v3, templates, patterns, functions.php
3. **Typography CSS** — Butterick layer tuned to chosen font
4. **Dual dark mode** — CSS custom properties, template-scoped surfaces
5. **Content mode patterns** — All 5 templates
6. **Style variations** — 5 identity-only JSON files
7. **Cross-site navigation** — Room-switcher pattern
8. **Specimen page** — Type scale, measure demo, dark mode comparison
9. **Accessibility audit** — WCAG AA for all surface/text combinations
10. **Deploy** — All 5 sites, starting with paolo.blog

## Files

| Path | Purpose |
|------|---------|
| `CLAUDE.md` | Project instructions and conventions |
| `DOCUMENTATION.md` | This file |
| `.gitignore` | Ignores refs/ and .DS_Store |
| `refs/` (gitignored) | Reference screenshots, wireframe, Practical Typography PDF |
