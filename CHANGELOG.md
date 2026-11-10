# APES Shelter and Rescue Website Changelog

## [0.1.3] - 2026-11-10

- Change type: Maintenance. Laragon is the only local set-up: `docs/laragon/`, `scripts/laragon-setup.ps1` and the live preview gate `scripts/preview.ps1`, with Browsersync live reload on port 3102.
- Change type: Release process. Versions come from the milestone version through `scripts/milestone-version`; `VERSION` is now plain semver (`0.1.3`) and the footer shows `v0.1.3`. Each version ships once: one pull request, one tag, one Release (`release.yml`) and one deploy of that tag (`deploy/cloudron/deploy.ps1 -Tag`, with backup, swap, `/VERSION` check and rollback).
- Change type: CI. Replaced the Jekyll container CI, which built nothing this site uses, with site checks, PHP lint, PR title and branch checks, dependency review, CodeQL and Dependabot into the `dependencies` branch (#21). Removed the empty `deploy-to-cloudron.yml.txt` (#22).
- Change type: Release records. Updated root and public `VERSION` files, the footer version label and the changelog records to v0.1.3.
## v0.1.2 Stable - 19 August 2026

- Change type: Content. Updated the public postal address to 40 Morris Street, St Helens, Merseyside, WA9 3EN on contact, footer, surrender, privacy and terms pages.
- Change type: Content. Replaced the APES 0300 contact number with 01744 374 015 across public contact copy, footer, surrender, policies and route-helper call links.
- Change type: Compliance. Removed crawlable mailto markup for the info mailbox and hydrate the address in JavaScript with rel=nofollow and data-nosnippet wrappers.
- Change type: Compliance. Re-checked shared footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub after the contact details patch.
- Change type: SEO and error pages. Verified sitemap, robots/noindex rules, Newsroom routing and the branded 404 page required no structural changes for this contact-details patch.
- Change type: Release records. Updated root and public VERSION files, footer version labels, changelog records, manifest records, QA notes and release documentation to v0.1.2 Stable.

## v0.1.1 Stable - 8 June 2026

- Change type: Runtime. Removed the shared Hallobar bootstrap from `public/assets/js/third-party.js` so the Hallobar marketing script no longer loads on public pages.
- Change type: Compatibility. Kept the existing OneSignal host guard and supported production-host initialization path unchanged.
- Change type: Navigation behaviour. Removed Hallobar-only mobile widget suppression selectors while preserving Donorbox, Chatwoot and OneSignal suppression during mobile menu open states.
- Change type: Compliance. Re-checked shared footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub after the marketing integration cleanup.
- Change type: SEO and error pages. Verified sitemap, robots/noindex rules, Newsroom routing and the branded 404 page required no structural changes for this integration-removal patch.
- Change type: Release records. Updated root and public `VERSION` files, footer version labels, changelog records, manifest records, QA notes and release documentation to v0.1.1 Stable.

## v0.1.0 Stable - 8 June 2026

- Change type: New route. Added `division-mission.html` as a formal public-facing mission page for APES Shelter & Rescue, covering division purpose, APESCIC alignment, core objectives and accountability.
- Change type: Mission content. Published mission copy that explicitly links Shelter work to rescue, rehabilitation, rehoming, owner support, education, advocacy, welfare standards and transparent community benefit.
- Change type: Historical figures. Added approved 2023 to 2025 shelter baselines for intakes, adoptions and live outcomes without inventing unapproved future numeric targets for outreach or partnerships.
- Change type: Navigation and discovery. Added the new route to the shared Information menu, Service Finder, Search page, sitemap and public manifest records.
- Change type: Compliance. Re-checked shared footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub after the new public mission route was added.
- Change type: SEO and error pages. Updated sitemap coverage for the new route and verified robots/noindex rules, Newsroom routing and the branded 404 page required no further structural changes.
- Change type: Release records. Promoted the site from `v0.0.23b` to `v0.1.0` stable across root and public `VERSION` files, footer version labels, changelog records, manifest records, QA notes and release documentation.

## v0.0.23 Beta - 8 June 2026

- Change type: Layout fix. Constrained the shared development notice card to the same 90 percent desktop and tablet content width used by the rest of the website instead of allowing it to stretch edge-to-edge.
- Change type: Shared header. Kept the existing shared header include and live chat button behavior unchanged so the notice still appears site-wide everywhere the shared header is used.
- Change type: Responsive review. Preserved the narrower mobile width exception, stacked mobile notice layout, full-width mobile button behavior and unrelated modal backdrop styles while limiting the fix to the shared notice width only.
- Change type: Compliance. Re-checked shared footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub after the shared notice layout correction.
- Change type: SEO and error pages. Verified that sitemap, robots/noindex rules, Newsroom routing and the branded 404 page required no structural changes for this presentation-only patch.
- Change type: Release records. Updated root and public `VERSION` files, visible footer labels, public changelog records, manifest records, QA notes and release documentation to v0.0.23 Beta.

## v0.0.22 Beta - 8 June 2026

- Change type: New route. Added `corporations-public-sector.html` as a dedicated public rescue page for councils, housing associations, social services, mental health services, landlords, businesses, police or enforcement teams and partner organisations.
- Change type: Rescue journey. Updated `rescues.html` and the rescue route helper so public-sector and corporate users are directed to the dedicated page before opening a support ticket.
- Change type: Search and discovery. Added the new route to the Service Finder, Search page, sitemap and public manifest records so it is indexed and easier to share.
- Change type: Compliance. Re-checked shared footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub after adding the new public page.
- Change type: SEO and error pages. Added the new public route to sitemap and manifest records, and confirmed the branded 404 page plus shared public structure needed no further route handling changes.
- Change type: Release records. Updated root and public `VERSION` files, visible footer labels, public changelog records, manifest records, QA notes and release documentation to v0.0.22 Beta.

## v0.0.21 Beta - 6 June 2026

- Change type: Homepage notice scope. Moved the development notice bar into the shared header include so it now appears on shared public pages such as Education, while keeping the dismissible website update popup on the homepage only.
- Change type: Live support. Preserved the existing shared Chatwoot launcher and support-ticket fallback for the site-wide development notice button.
- Change type: Behaviour. Kept homepage localStorage dismissal behavior unchanged so the popup stays closed in the same browser profile once dismissed.
- Change type: Footer compliance. Re-checked shared footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub after the notice-scope correction.
- Change type: SEO and error pages. Verified that no routes were added, removed or renamed, so sitemap records, robots/noindex rules, Newsroom routing and the branded 404 page required no structural changes.
- Change type: Release records. Updated root and public `VERSION` files, visible footer labels, public changelog records, manifest records, QA notes and release documentation to v0.0.21 Beta.

## v0.0.20 Beta - 6 June 2026

- Change type: Navigation. Removed MyAPES Account from the shared top-strip, main navigation and Support APES mega menu, then added a highlighted Donate link pointing to the donation page.
- Change type: Donations. Replaced the donation-page call-to-action with the supplied Donorbox popup button installer and inline `Donate Today!` button while preserving the donor wall and sticky Donorbox widget.
- Change type: Homepage notice. Added a development notice above the urgent appeal bar and a dismissible website update popup that stays dismissed in the same browser profile using local storage.
- Change type: Live support. Added shared live chat launch handling for the homepage notice and popup, with a routed support-ticket fallback if Chatwoot is not ready.
- Change type: Footer compliance. Re-checked shared footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub after the navigation and donation updates.
- Change type: SEO and error pages. Verified that no public routes were added, removed or renamed, so sitemap records, robots/noindex rules, Newsroom routing and the branded 404 page required no structural changes.
- Change type: Release records. Updated root and public `VERSION` files, visible footer labels, public changelog records, manifest records, QA notes and release documentation to v0.0.20 Beta.

## v0.0.19 Beta - 6 June 2026

- Change type: Navigation spacing. Added a mobile-only bottom gutter to the sticky header so the Menu button no longer sits flush against the lower header border.
- Change type: Mobile UX. Reduced the open mobile drawer top offset to a small intentional gap so the navigation panel sits directly below the nav bar instead of leaving a large visual break.
- Change type: Behaviour preservation. Kept the existing overlay, scroll lock, grouped route, close, reopen and widget-suppression behaviour unchanged while refining spacing only.
- Change type: Footer compliance. Re-checked shared footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub after the mobile navigation spacing patch.
- Change type: SEO and error pages. Verified that sitemap records, robots/noindex rules, page metadata, Newsroom routing and the branded 404 page required no route changes for this presentation-only patch.
- Change type: Release records. Updated root and public `VERSION` files, visible footer labels, public changelog records, manifest records, QA notes and release documentation to v0.0.19 Beta.

## v0.0.18 Beta - 6 June 2026

- Change type: Navigation fix. Removed the closed mobile navigation shell from the under-980px layout so it cannot add header height, create a large opening gap or leave a blank white panel after close.
- Change type: Behaviour. Hardened mobile close and reopen handling so overlay state, body scroll lock, grouped menu state, widget suppression and focus restoration reset consistently across close paths.
- Change type: Console triage. Reviewed the uploaded developer panel log and documented that the repeated `share-modal.js` null listener error is not sourced from this repository, while Donorbox/FingerprintJS/reCAPTCHA/hCaptcha messages remain third-party embed noise unless donation testing shows a user-facing failure.
- Change type: Footer compliance. Re-checked shared footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub after the mobile navigation patch.
- Change type: SEO and error pages. Verified that sitemap records, robots/noindex rules, page metadata, Newsroom routing and the branded 404 page required no route changes for this behaviour-only patch.
- Change type: Release records. Updated root and public `VERSION` files, visible footer labels, public changelog records, manifest records, QA notes and release documentation to v0.0.18 Beta.

## v0.0.17 Beta - 6 June 2026

- Change type: Navigation. Hardened the shared APES-style Shelter header controller with synced mobile and desktop menu offsets, pagehide cleanup, beforeunload cleanup and persisted pageshow reset handling.
- Change type: Desktop mega menus. Added a shared `--mega-panel-top` offset and constrained mega-panel sizing to reduce horizontal overflow risk while preserving Shelter route labels, grouped menus and APES-style card presentation.
- Change type: Mobile navigation. Preserved the 980px mobile breakpoint, fixed header-offset overlay, scroll lock, accordion grouped routes, Escape close, overlay close, outside-click close, link-close behaviour and widget suppression.
- Change type: Footer compliance. Re-checked shared footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub, and kept Shelter-specific partner, contact, legal and version content intact.
- Change type: SEO and error pages. Verified that sitemap records, page metadata and the branded 404 page required no route changes for this header, footer and navigation hardening patch.
- Change type: Release records. Updated root and public `VERSION` files, visible footer labels, public changelog records, manifest records, QA notes and release documentation to v0.0.17 Beta.

## v0.0.16 Beta - 6 June 2026

- Change type: Navigation. Hardened the shared Shelter menu controller so mobile open and close state, grouped menu toggles, Escape handling and resize sync behave more reliably across injected layouts and smaller screens.
- Change type: Runtime. Replaced repeated page-level OneSignal and Hellobar bootstraps with a shared guarded loader so unsupported beta hosts no longer throw production-domain errors in the console.
- Change type: Compatibility. Preserved donor, chat, push and banner widget suppression while the mobile menu is open and confirmed the remaining `share-modal.js` error is not sourced from this repository.
- Change type: Compliance. Re-checked shared footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub after the shared runtime patch.
- Change type: SEO and error pages. Verified that sitemap records, page metadata and the branded 404 page required no route changes for this navigation and runtime patch.
- Change type: Release records. Added synced root and public `VERSION` files, updated visible version labels, manifest records, QA notes and release documentation to v0.0.16 Beta.

## v0.0.15 Beta - 6 June 2026

- Change type: Navigation. Reworked the shared Shelter mobile navigation to match the wider `www.apes.org.uk` mobile-menu pattern, replacing the narrow right-edge drawer feel with a centered, header-offset panel.
- Change type: UX. The mobile menu now opens below the sticky header with a wider panel, stronger overlay, scroll-contained route list and grouped sections that expand inside the panel instead of feeling trapped in the header bar.
- Change type: Behaviour. Added a shared `--mobile-nav-top` offset sync so the overlay and panel stay anchored beneath the sticky header across open, resize, scroll, load and pageshow states.
- Change type: Compliance. Re-checked shared footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub after the mobile navigation update.
- Change type: SEO and error pages. Verified that sitemap records, page metadata and the branded 404 page required no route changes for this navigation-only patch.
- Change type: Release records. Updated visible version labels, public changelog records, manifest records, QA notes and release documentation to v0.0.15 Beta.

## v0.0.14 Beta - 6 June 2026

- Change type: Navigation. Hardened the shared mobile drawer stacking context so the menu and overlay render in a dedicated top layer above homepage hero content, urgent banners and other page sections on phone-width screens.
- Change type: Deployment verification. Confirmed the beta hostname is serving the current shared CSS asset path and flagged that the live hostname deployment should be synced using a full `public/` upload because it does not currently expose the same asset URL.
- Change type: UX. Preserved overlay close, Escape close, outside-click close, scroll lock, grouped-menu expansion and widget suppression while tightening the drawer layering rules.
- Change type: Compliance. Re-checked shared footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub after the nav hardening patch.
- Change type: SEO and error pages. Verified that sitemap records, page metadata and the branded 404 page required no route changes for this presentation-layer update.
- Change type: Release records. Updated visible version labels, public changelog records and release documentation to v0.0.14 Beta.

## v0.0.13 Beta - 6 June 2026

- Change type: Navigation. Raised the shared mobile drawer navigation stacking order so the menu, overlay and grouped routes stay above homepage hero content and other page sections on small screens.
- Change type: UX. Preserved the existing mobile drawer behaviour for overlay close, Escape close, outside-click close, scroll lock and grouped-menu expansion while fixing the layering bug.
- Change type: Compliance. Re-checked shared footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub after the navigation fix.
- Change type: SEO and error pages. Verified that sitemap records, page metadata and the branded 404 page required no route changes for this presentation-layer update.
- Change type: Release records. Updated visible version labels, public changelog records and release documentation to v0.0.13 Beta.

## v0.0.12 Beta - 6 June 2026

- Change type: Navigation. Rebuilt the shared Shelter header to use an APES-style mobile drawer with native `details`-based grouped menus while preserving all existing Shelter labels, routes and external-link behaviour.
- Change type: UX. Added overlay close, Escape close, outside-click close, resize sync, mobile scroll lock and mobile link-close behaviour to make the shared nav more robust on smaller screens and around third-party widgets.
- Change type: Compliance. Re-checked shared footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub after the nav change.
- Change type: SEO and error pages. Verified that sitemap records, page metadata and the branded 404 page required no route changes, and confirmed the shared nav still applies to the 404 template.
- Change type: Release records. Updated visible version labels, public changelog records, QA notes, manifest records and release documentation to v0.0.12 Beta.

## v0.0.11 Beta - 4 June 2026

- Change type: Layout. Updated shared page containers to use a 90% viewport width on desktop and tablet, with a narrower mobile exception for readability.
- Change type: Footer. Rebuilt the shared footer include into an APES-style four-panel layout with shelter-specific journeys, partner pills, social links and expanded legal/contact fine print.
- Change type: Compliance. Verified footer links for Donate, Privacy Policy, Terms of Service, Refund Policy and Change Log Hub.
- Change type: Release records. Updated visible version labels, public changelog records, QA notes, manifest records and release documentation to v0.0.11 Beta.
- GitHub issue note: This release aligns with the existing footer enhancement request referenced on the public changelog issue list.
