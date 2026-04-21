# Setup

## Basic Install

1. Copy or clone the repository into a web-visible directory.
2. Confirm the web server routes `.php` files through PHP.
3. Open `/index.php` in a browser.
4. Replace placeholder modules, images, policy text, and contact details.

## App Config

Basic public app settings live in `cfg/app.php`:

```php
$app_config_arr = array(
    'app_name_str' => 'Mobi Skeleton',
    'default_frm_str' => 'home',
    'default_pane_str' => 'panel1'
);
```

Do not put secrets in this file. Use deployment configuration or `.env` for
local-only private values.

## Apache

The repository includes `.htaccess` hardening rules. They require common Apache
modules such as `headers`, `rewrite`, and `expires`.

If your host disallows some `.htaccess` directives, move those rules into the
site vhost configuration or comment them with a clear note.

## Nginx

Nginx ignores `.htaccess`. Use server-level rules like the examples in
`docs/nginx_location_access.example.conf`.

## Adding Pages

Add a PHP module under `mod/`:

```php
<?php // $Id$

function example() {
    print "<h2>Example</h2>";
} // end func example
?>
```

Then link to it with:

```html
<a href="index.php?frm=example&pane=panel1">Example</a>
```

For the default two-panel shell, target a panel body instead:

```html
<a href="index.php?frm=example&pane=panel1"
   hx-get="index.php?frm=example&pane=panel1&ishtmx=1"
   hx-target="#mobiskel-panel-1-body"
   hx-swap="innerHTML"
   onclick="mobiskel_show_pane('panel1');">Example</a>
```

## Checks

Run syntax checks before committing PHP changes:

```sh
php -l index.php
for phpfile in mod/*.php tests/*.php; do php -l "$phpfile" || exit 1; done
```
