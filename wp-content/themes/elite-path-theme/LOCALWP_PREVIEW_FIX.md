# 🔧 LocalWP Preview Fix Guide

## Why Your Preview Doesn't Match

When you open LocalWP and click "Preview," it may not show the Elite Path theme styled like our test because:

### ❌ Common Issues

1. **Theme Not Activated**
   - Elite Path theme exists but isn't set as the active theme
   - WordPress is showing the default theme (Twenty Twenty-Five or similar)

2. **Site URL Mismatch**
   - LocalWP might be using a different domain (e.g., `elite-path.test` instead of `elite-path.local`)
   - Browser cache showing old version

3. **CSS Not Loading**
   - Style.css or main.css path misconfigured
   - Asset URLs don't match the site URL

4. **Plugin Conflicts**
   - A plugin is overriding theme styling
   - Caching plugin serving old version

---

## ✅ Fix Steps

### Step 1: Verify Theme is Active
1. Open **LocalWP** → Click your site
2. Go to **Admin** button (opens wp-admin)
3. Navigate to **Appearance → Themes**
4. Look for **Elite Path** theme
5. If not active: Click **Activate** button
6. Refresh browser

### Step 2: Check Site URL
1. In WordPress Admin: **Settings → General**
2. Verify:
   - **WordPress Address:** `http://elite-path.local` (or your LocalWP domain)
   - **Site Address:** `http://elite-path.local` (same)
3. If changed, click **Save Changes** (WordPress will reload)

### Step 3: Clear Cache
1. **Browser cache:** Ctrl+Shift+Delete (or Cmd+Shift+Delete on Mac)
2. **WordPress cache:** Install WP Super Cache plugin and clear
3. **LocalWP cache:** Restart LocalWP app

### Step 4: Check Asset Paths
1. Open browser DevTools: **F12**
2. Go to **Console** tab
3. Look for any **404 errors** (red errors showing missing files)
4. Common issues:
   - `style.css not found` → Check file exists in theme folder
   - `main.css not found` → Check `/assets/css/main.css` path

### Step 5: Verify LocalWP Settings
1. Right-click site in LocalWP → **Settings**
2. Check **Domain:** Should be `elite-path.local`
3. Check **Nginx/PHP:** Should show "Running" status
4. Verify **Port:** 80 (or whatever is configured)

---

## 🎯 Quick Test

After activating the theme:

1. **LocalWP Preview:** Click "Preview" button
2. **Direct URL:** Open browser and go to `http://elite-path.local`
3. Both should show:
   - Navy (#003149) header with navigation
   - Orange (#ff6a00) accent colors
   - Hero section with search form
   - Services carousel

If you see plain white page or default WordPress theme → **Theme not activated**

---

## 📝 Elite Path Theme Details

- **Theme Folder:** `/wp-content/themes/elite-path-theme/`
- **Main CSS:** `/wp-content/themes/elite-path-theme/assets/css/main.css` (458 lines)
- **Style Header:** `/wp-content/themes/elite-path-theme/style.css` (78 lines)
- **Status:** ✅ Fully functional and tested

---

## 🆘 Still Not Working?

Try these terminal commands in VS Code (PowerShell):

```powershell
# 1. Verify theme files exist
Test-Path "c:\Users\King\Local Sites\elite-path\app\public\wp-content\themes\elite-path-theme\style.css"

# 2. Check file permissions
Get-Item "c:\Users\King\Local Sites\elite-path\app\public\wp-content\themes\elite-path-theme\" | Select-Object -ExpandProperty Attributes

# 3. Restart LocalWP services
# (Stop LocalWP app and restart it)

# 4. Check WordPress options
# In LocalWP Admin: Settings → General
# Verify both URLs match your site domain
```

---

## 🎨 What You Should See

Once Elite Path is active:

### Homepage (http://elite-path.local)
- ✅ Navy/blue header with logo
- ✅ Hero section with background image overlay
- ✅ "Travel Curated For You" heading
- ✅ Orange search form on the right
- ✅ Services carousel below

### About Page (http://elite-path.local/about/)
- ✅ Page header with title
- ✅ Mission & Vision section (2 columns)
- ✅ 4 stat cards (25+, 50K+, 120+, 95%)
- ✅ Story section below

### Other Pages
- ✅ Contact form with orange button
- ✅ Visa finder with dropdowns
- ✅ Tours carousel with OWL
- ✅ Login page with styled form

---

## 🚀 If Everything Works

You should see:
1. ✅ Consistent navy/orange color scheme
2. ✅ Responsive layout (works on mobile)
3. ✅ Smooth animations (hover effects, transitions)
4. ✅ All links working
5. ✅ Forms functional
6. ✅ No 404 errors in console

---

**Questions?** Check the test reports in the theme folder:
- `COMPLETE_URL_TEST_RESULTS.md` — Full testing details
- `URL_TEST_REPORT.md` — Quick reference

