# Public Website Changelog

## [0.1.3] - 2026-11-10

- Maintenance release: the website looks and works as before.
- The footer version label now reads v0.1.3.
- Releases are now published from a version tag and deployed with a checked, reversible deploy script.
## v0.1.2 Stable - 19 August 2026

- Public postal address now includes Merseyside: 40 Morris Street, St Helens, Merseyside, WA9 3EN.
- APES phone number is now 01744 374 015 on contact, footer, surrender, policies and route helpers.
- The info mailbox is no longer printed as a crawlable mailto in static HTML; it is hydrated in JavaScript with rel=nofollow.
- Footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub were re-checked after the contact details patch.
- Sitemap, robots/noindex rules, Newsroom routing and the branded 404 page were reviewed and did not need structural changes.
- Public release labels, version files, manifest records and release documentation updated to v0.1.2 Stable.

## v0.1.1 Stable - 8 June 2026

- Hallobar has been removed from the shared third-party loader, so the Hallobar marketing script no longer loads on public pages.
- OneSignal remains in place and still only initializes on the supported production hosts.
- Mobile menu widget suppression now keeps Donorbox, Chatwoot and OneSignal behind the panel without retaining Hallobar-only selectors.
- Footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub were re-checked after the integration cleanup.
- Sitemap, robots/noindex rules, Newsroom routing and the branded 404 page were reviewed and did not need structural changes.
- Public release labels, version files, manifest records and release documentation updated to v0.1.1 Stable.

## v0.1.0 Stable - 8 June 2026

- A new Division Mission page has been added to explain the Shelter division mission, objectives and accountability within the wider APESCIC mission.
- The new page publishes approved 2023 to 2025 shelter baselines for intakes, adoptions and live outcomes while keeping outreach and partnership commitments non-numeric until formally approved.
- Shared navigation, Service Finder, Search, sitemap and public manifest records now include the new mission route.
- Footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub were re-checked after the new public page was added.
- Sitemap coverage was updated for the new route, while robots/noindex rules, Newsroom routing and the branded 404 page needed no further structural changes.
- Public release labels, version files and release records were promoted from beta to v0.1.0 Stable.

## v0.0.23 Beta - 8 June 2026

- The shared development notice now uses the same desktop and tablet content width as the rest of the page instead of stretching edge-to-edge.
- The notice still appears across shared public pages through the shared header and keeps the same live chat button behavior.
- The narrower mobile width exception and full-width mobile notice button behavior were preserved while correcting the desktop and tablet layout only.
- Footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub were re-checked after the notice layout correction.
- Sitemap, robots/noindex rules, Newsroom routing and the branded 404 page were reviewed and did not need structural route changes.
- Public release labels, version files and release records updated to v0.0.23 Beta.

## v0.0.22 Beta - 8 June 2026

- A new corporate and public sector rescue page has been added for councils, housing associations, social services, landlords, businesses and partner organisations.
- Rescue-page guidance and the rescue route helper now direct organisational users to the dedicated page before they open a support ticket.
- The new page has been added to the Service Finder, Search page, sitemap and manifest records for easier discovery and sharing.
- Footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub were re-checked after the new page was added.
- Sitemap, manifest records and shared public routing were updated for the new page without requiring further 404 or structural handling changes.
- Public release labels, version files and release records updated to v0.0.22 Beta.

## v0.0.21 Beta - 6 June 2026

- The development notice bar now appears on shared public pages instead of only on the homepage.
- The website update popup remains homepage-only and still stays dismissed in the same browser profile once closed.
- Live chat buttons on the site-wide notice continue to use Chatwoot when available and fall back to the APES support-ticket route if chat is not ready.
- Footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub were re-checked after the notice-scope correction.
- Sitemap, robots/noindex rules, Newsroom routing and the branded 404 page were reviewed and did not need structural route changes.
- Public release labels, version files and release records updated to v0.0.21 Beta.

## v0.0.20 Beta - 6 June 2026

- MyAPES Account has been removed from the shared main navigation areas.
- A highlighted Donate link now appears in the main navigation and opens the donation page.
- The donation page now uses the supplied Donorbox popup button installer and `Donate Today!` button.
- The homepage now shows a development notice above the urgent appeal bar and a dismissible website update popup for first-time visitors in a browser profile.
- Homepage live chat buttons now attempt to open Chatwoot and fall back to the routed APES support-ticket page if chat is not ready.
- Footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub were re-checked after the navigation and donation update.
- Sitemap, robots/noindex rules, Newsroom routing and the branded 404 page were reviewed and did not need structural route changes.
- Public release labels, version files and release records updated to v0.0.20 Beta.

## v0.0.19 Beta - 6 June 2026

- Mobile header spacing now leaves a small gap below the Menu button instead of letting it sit flush with the bottom of the sticky nav bar.
- The opened mobile navigation panel now sits just below the nav bar with only a small intentional gap instead of the larger space shown on phone screens.
- Existing menu close, reopen, overlay, grouped-route and widget-suppression behaviour was preserved while refining spacing only.
- Footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub were re-checked after the mobile navigation spacing patch.
- Sitemap, robots/noindex rules, page metadata, Newsroom routing and the branded 404 page were reviewed and did not need route-related changes.
- Public release labels, version files and release records updated to v0.0.19 Beta.

## v0.0.18 Beta - 6 June 2026

- Mobile navigation now removes the closed drawer shell from the phone and tablet layout so it opens directly below the sticky header instead of being pushed down by stale hidden panel height.
- Closing the mobile menu now clears overlay, scroll lock, grouped routes, widget suppression and focus state more reliably, preventing the blank white panel flash and allowing the menu to reopen repeatedly.
- The uploaded developer panel log was reviewed: the repeated `share-modal.js` error is not sourced from this repository, and donation/captcha/fingerprint messages remain third-party embed warnings unless a donation-flow failure is confirmed.
- Footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub were re-checked after the mobile navigation patch.
- Sitemap, robots/noindex rules, page metadata, Newsroom routing and the branded 404 page were reviewed and did not need route-related changes.
- Public release labels, version files and release records updated to v0.0.18 Beta.

## v0.0.17 Beta - 6 June 2026

- Shared header, footer and navigation behaviour now aligns more closely with the APESCIC shared pattern while preserving Shelter-specific labels, routes, branding, contact details and legal links.
- Desktop mega menus now use a synced header-height offset and constrained panel sizing to reduce horizontal overflow risk.
- Mobile navigation keeps the existing fixed overlay below the sticky header, internal scrolling, body scroll lock, grouped accordions, Escape close, overlay close, outside-click close and link-close behaviour.
- Navigation cleanup now also runs on pagehide, beforeunload and persisted pageshow so menu state does not remain stuck across browser lifecycle transitions.
- Footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub were re-checked after the shared header/footer patch.
- Sitemap, page metadata and the branded 404 page were reviewed and did not need route-related changes.
- Public release labels, version files and release records updated to v0.0.17 Beta.

## v0.0.16 Beta - 6 June 2026

- Shared mobile navigation logic now handles menu open and close state, grouped route toggles, Escape close and resize sync more reliably on smaller screens.
- OneSignal and Hellobar are now loaded through a shared host-aware script so the beta hostname no longer throws production-only console errors.
- Existing widget suppression for donor, chat, push and banner layers was preserved while the mobile menu is open.
- Footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub were re-checked after the shared runtime patch.
- Sitemap, page metadata and the branded 404 page were reviewed and did not need route-related changes.
- Public release labels, version files and release records updated to v0.0.16 Beta.

## v0.0.15 Beta - 6 June 2026

- Shared mobile navigation now opens as a wider APES-style panel below the sticky header instead of a narrow drawer isolated to the header edge.
- The mobile overlay and panel now use a synced header offset, stronger full-content coverage and a scrollable inner route list so grouped routes open cleanly inside the panel.
- Existing menu close behaviour for overlay tap, Escape, outside click, resize sync, link follow and widget suppression was preserved while the mobile presentation was rebuilt.
- Footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub were re-checked after the nav update.
- Sitemap, page metadata and the branded 404 page were reviewed and did not need route-related changes.
- Public release labels and release records updated to v0.0.15 Beta.

## v0.0.14 Beta - 6 June 2026

- Shared mobile navigation now uses an explicit top-layer stacking context so the drawer, overlay and grouped routes stay above homepage hero content, urgent banners and other page sections on small screens.
- Deployment verification confirmed the beta hostname is serving the current shared CSS asset path and identified that the live hostname should be synced with a full `public/` upload because it does not expose the same asset URL.
- Existing mobile drawer behaviour for overlay close, Escape close, outside-click close, scroll lock and grouped menus was preserved while the stacking rules were hardened.
- Footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub were re-checked after the nav patch.
- Sitemap, page metadata and the branded 404 page were reviewed and did not need route-related changes.
- Public release labels and release records updated to v0.0.14 Beta.

## v0.0.13 Beta - 6 June 2026

- Shared mobile navigation layering was raised so the drawer, overlay and grouped routes stay above the homepage hero and other page content on small screens.
- Existing mobile drawer behaviour for overlay close, Escape close, outside-click close, scroll lock and grouped menus was preserved while the layering bug was fixed.
- Footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub were re-checked after the nav fix.
- Sitemap, page metadata and the branded 404 page were reviewed and did not need route-related changes.
- Public release labels and release records updated to v0.0.13 Beta.

## v0.0.12 Beta - 6 June 2026

- Shared navigation rebuilt to use an APES-style mobile drawer and native grouped menu behaviour without changing Shelter route labels or destinations.
- Mobile nav now supports overlay close, Escape close, outside-click close, scroll lock and safer behaviour around shared widgets.
- Footer routes for Donate, Privacy Policy, Terms of Service and Change Log Hub were re-checked after the nav update.
- Sitemap, page metadata and the branded 404 page were reviewed and did not need route-related changes.
- Public release labels and release records updated to v0.0.12 Beta.

## v0.0.11 Beta - 4 June 2026

- Shared layout updated to a 90% viewport width on desktop and tablet, with a mobile readability exception.
- Shared footer rebuilt in the APES style with four content panels, partner pills, social links and expanded legal/contact details.
- Footer route checks confirmed for Donate, Privacy Policy, Terms of Service, Refund Policy and Change Log Hub.
- Public release labels and release records updated to v0.0.11 Beta.
