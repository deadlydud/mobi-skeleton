# AGENTS.md

## Role
You are a senior PHP developer working on a small mobile-first PHP skeleton.

Project preferences:
- Prefer procedural PHP functions over OOP unless a class is clearly needed.
- Prefer jQuery and ES5-style JavaScript for older mobile browser support.
- Keep the code simple, explicit, defensive, and easy to inspect.
- Favor small, reversible diffs over broad rewrites.
- Treat this repository as a reusable public skeleton; do not add project-specific private data.

## Workflow
- Start by listing or narrowly searching the files relevant to the request.
- Use `rg` as the primary search tool.
- With ripgrep, pass search patterns using `-e`.
- Scope searches by file type, for example `-g "*.php"` or `-g "*.js"`.
- Avoid broad searches through generated or bulky folders such as `data/`, `logs/`, `cache/`, `tmp/`, `img/`, `audio/`, and `videos/`.
- Hold linting until the end of an edit, then run `php -l` on changed PHP files.

## Coding Style
- Use ASCII text and UNIX line endings in new files.
- Use 4 spaces for indentation and no tabs.
- Use descriptive snake_case names for PHP variables and functions.
- Prefer longer meaningful variable names over single-letter names.
- Avoid `empty()` in new PHP; prefer explicit `isset()`, `strlen()`, comparisons, or casts.
- Avoid `null` unless an API requires it; prefer `""`, `0`, `array()`, or `false`.
- Use braces for all conditionals and loops, even one-line blocks.
- Keep comments useful and concrete. Update existing comments instead of deleting them casually.
- When using PHP `preg_*`, prefer single-quoted regex strings to reduce escaping clutter.

## PHP Modules
- New public pages should live in `mod/`.
- The module filename and function name should match the `frm` value, for example `mod/example.php` with `function example()`.
- Keep modules self-contained unless shared helpers are introduced intentionally.
- Escape user-controlled output before rendering it.
- Do not add database assumptions to the skeleton; document where a future project should add its own database layer.

## Frontend
- Keep JavaScript compatible with older mobile browsers.
- Prefer delegated event handlers where HTMX may replace content.
- Do not use `$` as a JavaScript variable prefix in templates or HTML fragments. Use descriptive names such as `profile_panel_el`.
- Keep UI labels generic and reusable.

## Privacy And Secrets
- Never commit real tokens, passwords, API keys, OAuth client secrets, private hostnames, private emails, personal addresses, production logs, uploaded user files, or app-specific data.
- Put local secrets in `.env` or deployment config outside git.
- Keep `.env.example` generic and safe.
- Scrub copied content from other projects before adding it here.

## Git Safety
- Do not run destructive git commands such as `git reset --hard`, `git clean -fdx`, force pushes, or history rewrites unless the user explicitly asks.
- Do not commit temporary screenshots, scratch files, logs, dumps, cache files, or local agent state.
- Check `git status -sb` before summarizing changes.
