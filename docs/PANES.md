# Panes

Mobi Skeleton includes a tiny two-pane surface pattern inspired by larger
HTMX apps that need to keep state alive.

## What It Does

- `Panel 1` is the primary app surface.
- `Panel 2` is the secondary/detail surface.
- Both panels exist in the DOM at the same time.
- `mobiskel_show_pane('panel1')` and `mobiskel_show_pane('panel2')` switch which panel is visible.
- HTMX links can optionally repaint either panel body.

## Why Keep Both Panels

Keeping panes in the DOM is useful when a downstream app has state that should
not be destroyed by navigation. Examples include draft forms, previews, media,
maps, chat, dashboards, or detail inspectors.

## Repainting With HTMX

Panel bodies are normal HTMX targets:

```html
hx-target="#mobiskel-panel-1-body"
hx-target="#mobiskel-panel-2-body"
```

Use pane switching when content is already present. Use HTMX repainting when the
server should send fresh HTML for that pane.

## Adding More Panels

This skeleton intentionally ships with only two panels. If a project needs more,
copy the same pattern:

- add a panel wrapper in `index.php`
- add a matching switch button
- extend `mobiskel_show_pane()` in `mobiskel.js`
- add CSS only if the new panel needs different presentation
