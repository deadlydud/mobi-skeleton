# Security

This skeleton is a starting point, not a complete application security layer.

## Keep Out Of Git

Do not commit:

- `.env` or deployment config with real values
- API keys, OAuth secrets, private tokens, passwords, or certificates
- production logs, cache files, uploads, media libraries, and database dumps
- copied project documentation that contains names, domains, client data, or private workflow notes

## Web Server

- Apache can use the included `.htaccess` rules.
- Nginx needs equivalent `server` or `location` rules.
- Deny direct web access to VCS metadata, logs, config files, SQL dumps, backups, and temporary files.
- Use HTTPS in production.

## Application

- Treat `clean_all_inputs()` as a small skeleton helper, not a complete security model.
- Escape output according to context: HTML, attributes, URLs, JavaScript, or JSON.
- Add CSRF protection before enabling state-changing forms.
- Add authentication and authorization before adding private pages.
- Validate uploaded files by size, extension, MIME type, storage path, and access policy.
- Add a real session policy before building account features.

## Dependencies

The skeleton intentionally avoids package manager assumptions. If a downstream
project adds dependencies, commit lock files and document the install process.
