# APES Shelter and Rescue Website

Official development repository for **[www.apesshelter.org.uk](http://www.apesshelter.org.uk)**, the APES Shelter and Rescue website operated by the **Association of Protecting Exotic Species CIC**.

This repository is used to support the development, maintenance, improvement and issue tracking of the APES Shelter and Rescue website.

## Current Release Note

Current public release: **v0.1.2 Stable**.

This release updates public contact details to 40 Morris Street, St Helens, Merseyside, WA9 3EN and 01744 374 015, and hydrates the info mailbox in JavaScript with `rel="nofollow"` so it is not present as a crawlable mailto in static HTML.

## About APES Shelter and Rescue

APES Shelter and Rescue supports exotic animals requiring rescue, sheltering, rehabilitation, rehoming and long-term welfare support.

The website provides information and public access to APES Shelter and Rescue services, including:

* Exotic animal rescue information
* Shelter and surrender guidance
* Adoption information and adoption-ready animals
* Division mission, objectives and accountability
* Trial adoption information
* Foster programme information
* Sponsorship information
* Animal welfare guidance
* APES policies and terms
* Contact and support routes for service users

## Repository Purpose

This repository helps APES manage website development in a structured and transparent way.

It is used for:

* Tracking website bugs and faults
* Planning new website features
* Recording required content updates
* Managing accessibility and usability improvements
* Improving user journeys for adopters, surrendering owners, volunteers and supporters
* Tracking policy, compliance and governance-related website updates
* Coordinating development work across the APES Workspace
* Maintaining a clear record of website changes and fixes

## Website

Live website:

```text
https://www.apesshelter.org.uk
```

## Main Website Areas

The website may include development work across areas such as:

* Home page
* Adoptions
* Adoption process
* Trial adoptions
* Adoption fees
* Our animals
* Shelter and intakes
* Surrender services
* Rescue services
* Foster programme
* Sponsorships
* Pet care clinic
* Policies
* Knowledge base
* Contact pages
* Help centre
* APES Network Status
* User and service portals

## Issue Tracking

GitHub Issues should be used to record and manage:

* Bugs
* Broken links
* Missing pages
* Incorrect text or outdated information
* Form errors
* Accessibility concerns
* Mobile display issues
* Performance issues
* SEO improvements
* Policy updates
* Content requests
* New feature requests
* Urgent website fixes

When creating an issue, please include as much detail as possible.

Useful information includes:

* Page URL
* Description of the issue
* Steps to reproduce the issue
* Expected behaviour
* Actual behaviour
* Screenshots or screen recordings
* Device type
* Browser
* Operating system
* Urgency level
* Relevant department or service area

## Development Priorities

Development work should support the organisation’s core aims:

* Clear public access to rescue and shelter information
* High animal welfare standards
* Responsible adoption and rehoming processes
* Safe and accurate surrender guidance
* Accessible information for service users
* Compliance with relevant policies and legal duties
* Reliable forms, links and user journeys
* Clear communication with adopters, owners, volunteers and supporters

## Local Development

Laragon is the only supported local set-up. Its Apache serves `public/` with the same `.htaccess` rules as Cloudron.

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts\laragon-setup.ps1
powershell -NoProfile -ExecutionPolicy Bypass -File scripts\preview.ps1
```

The first links `C:\laragon\www\apes-shelter-website` to your clone so Laragon serves `http://apes-shelter-website.test`. The second pulls the latest changes and starts Browsersync on `http://localhost:3102/`, which reloads on save. Run `php scripts/check-site.php` before committing. See `docs/laragon/profile.md`.

## How Work Ships

Work ships once per milestone, by the milestone's version: one `milestone/vX-Y-Z-<slug>` branch, one pull request into `main` merged as a merge commit, one `vX.Y.Z` tag and Release, and one deploy of that tag with `deploy/cloudron/deploy.ps1 -Tag vX.Y.Z`. Commit messages follow Conventional Commits and name the issue, for example `fix: correct the adoption process link (Refs #12)`. See `CONTRIBUTING.md` and `.cursor/rules/version-shipping.mdc`.

## Pull Requests

Pull requests should explain:

* What has changed
* Why the change is needed
* Which page or section is affected
* Whether the change has been tested
* Any risks or follow-up actions
* Whether content, policy or senior review is required

Before requesting review, check:

* The affected page loads correctly
* Links work as expected
* Forms behave correctly
* Content is accurate
* Mobile display has been checked
* Accessibility has been considered
* No sensitive information has been committed

## Content Standards

Website content should be:

* Clear
* Accurate
* Professional
* Welfare-focused
* Accessible
* Suitable for the public
* Consistent with APES policies
* Written in British English
* Appropriate for a UK Community Interest Company

Content should avoid:

* Unverified claims
* Outdated service information
* Ambiguous welfare advice
* Unapproved legal or policy wording
* Personal data
* Internal-only operational details
* Confidential animal case information

## Compliance and Data Protection

Do not commit:

* Personal data
* Private adopter information
* Volunteer records
* Staff records
* Internal case notes
* Animal surrender records containing identifiable details
* Passwords
* API keys
* Credentials
* Private documents
* Sensitive operational information

Any website change involving policies, forms, service user information, adoption terms, surrender terms, privacy wording or legal statements should be reviewed by the appropriate APES lead before publication.

## Accessibility

Website updates should consider accessibility for all users.

Where possible, changes should support:

* Clear headings
* Readable text
* Descriptive links
* Keyboard-friendly navigation
* Mobile-friendly layouts
* Sufficient colour contrast
* Alternative text for meaningful images
* Simple and understandable user journeys

## Security

Security issues should not be posted publicly if they expose sensitive systems, credentials or user data.

If a security issue is found, report it internally to the APES website or systems lead as soon as possible.

## Suggested Labels

Useful GitHub issue labels may include:

```text
bug
content
accessibility
adoptions
rescues
surrenders
forms
policy
security
urgent
enhancement
mobile
seo
performance
needs-review
```

## Maintainers

This repository is maintained by APES CIC for the ongoing development and improvement of the APES Shelter and Rescue website.

## Organisation

**Association of Protecting Exotic Species CIC**
CIC Number: **16253848**

Main organisation website:

```text
https://www.apes.org.uk
```

Shelter and Rescue website:

```text
https://www.apesshelter.org.uk
```

## Licence and Use

This repository is for APES CIC website development and operational use.

Unless a separate licence is added, all website content, branding, written materials, graphics and assets remain the property of the Association of Protecting Exotic Species CIC or their respective rights holders.

## Disclaimer

This repository supports the development of the APES Shelter and Rescue website. It should not be used as a substitute for approved APES policies, internal procedures, legal guidance, veterinary advice or formal animal welfare decision-making.
