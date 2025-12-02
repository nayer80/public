# Elite Path — Theme README

Small, focused WordPress theme scaffold used for the Elite Path project. This README explains the theme structure, how to install and test it locally, and how to configure the contact form and mail testing.

## Quick overview
- Theme folder: `wp-content/themes/elite-path-theme`
- Packaged zip: `elite-path-theme.zip` (located in site root during packaging)
- Version: `v1.0.0` (local tag)

## Files of interest
- `functions.php` — theme setup, asset enqueues, and contact form handler (`elite_path_handle_contact`).
- `style.css` — theme metadata and design tokens (CSS variables).
- `assets/css/main.css` — main theme styles and page/contact-specific rules.
- `front-page.php` — homepage template (hero + search + services carousel).
- `page-contact.php` — contact page template and inline UI feedback alerts.
- `.vscode/settings.json` — workspace setting pointing `php.validate.executablePath` to the provided PHP CLI.

## Contact form
- Form posts to `admin-post.php` with `action=elite_path_contact` and includes a nonce field.
- Handler function: `elite_path_handle_contact()` in `functions.php`.
  - Verifies nonce (`elite_path_contact`), sanitizes input, validates required fields (name, email, message), and sends an email to `get_option('admin_email')` via `wp_mail()`.
  - Sets a `Reply-To` header so replies go to the submitter.
  - Redirects back to the referrer with `?contact_status={success|validation_error|invalid_nonce|error}` so UI alerts can display.

## Testing mail locally
1. Recommended: run MailHog (Docker):
```powershell
docker run -d -p 1025:1025 -p 8025:8025 mailhog/mailhog
```
Open `http://localhost:8025` to view captured messages.

2. Configure a WP SMTP plugin (e.g., WP Mail SMTP or Post SMTP) to use MailHog:
   - Host: `localhost`
   - Port: `1025`
   - Encryption: `None`
   - Authentication: Off

3. Alternatively, use the site's contact form directly — the handler calls `wp_mail()`; if MailHog is running you should see captured mails in its UI.

## Installation
1. From WP Admin: Appearance → Themes → Add New → Upload Theme → choose `elite-path-theme.zip`.
2. Or extract the theme directory to `wp-content/themes/elite-path-theme`.
3. Activate the theme in Appearance → Themes.

## Using the Contact Template
1. Create a Page in WordPress admin.
2. Select the `Contact` template in Page Attributes → Template.
3. Publish and visit the page to test the form.

## Customization & Notes
- Recipient: the contact handler uses `get_option('admin_email')`. Change in WP Admin → Settings → General or modify `$to` in `functions.php` if you want a different recipient.
- UX improvement ideas: preserve form values after validation failure, add reCAPTCHA or rate-limiting to reduce spam, add logging for failed sends.
- For production use, configure a transactional SMTP provider (SendGrid, Mailgun, etc.) via a plugin to ensure deliverability.

## Developer commands
- Package theme (PowerShell):
```powershell
Compress-Archive -Path 'C:\Users\King\Local Sites\elite-path\app\public\wp-content\themes\elite-path-theme\*' -DestinationPath 'C:\Users\King\Local Sites\elite-path\app\public\elite-path-theme.zip' -Force
```

## License
This scaffold contains no external license header. Add an appropriate license if you plan to distribute publicly.

---
If you'd like, I can also add a short `CHANGELOG.md`, wire an admin option to set the contact recipient, or push this local repo to a remote. What would you like next?
# Elite Path — WordPress Theme Scaffold

This is a starter WordPress theme scaffold to replicate the layout/design of the Rayna Tours site. It includes integration points for the technologies you requested:

- PHP (WordPress theme)
- jQuery (bundled by WordPress)
- OWL Carousel (CDN)
- GSAP (CDN)
- Tawk.to (live chat) placeholder
- W3 Total Cache: recommended plugin for caching (install via WP admin)

What I created
- `style.css` — theme header and base styles
- `functions.php` — enqueues scripts and styles (OWL, GSAP, main files)
- `header.php`, `footer.php` — theme wrapper
- `front-page.php` — simple homepage with hero and services carousels
- `index.php` — fallback template
- `assets/js/main.js` — carousel initialization + GSAP demo
- `assets/css/main.css` — additional styling

Installation
1. Place the `elite-path-theme` folder into your WordPress install under `wp-content/themes/`.
2. In WP Admin, go to Appearance → Themes and activate **Elite Path**.
3. Create a page and set it as the `Front page` in Settings → Reading, or assign the `Front Page` template.

Tawk.to
- In `footer.php` there's a commented placeholder where you should paste your Tawk.to embed script. Replace `YOUR_PROPERTY_ID` with your Tawk.to property details.

W3 Total Cache
- Install the plugin via Plugins → Add New → search "W3 Total Cache" and configure caching according to your hosting environment. This theme is compatible with WP caching plugins.

Next steps I can do for you
- Flesh out the theme templates to match Rayna Tours exactly (header layout, menus, contact forms, pages)
- Add image assets, fonts, and copy for each section
- Make responsive refinements and accessibility checks
- Create a child-theme friendly structure and customizer settings

If you'd like, I can continue and implement more pages, copy the exact header/hero layout, and import sample content to match the reference site. Tell me what page you'd like next (Header, Destinations, Tour Details, Contact, etc.).
