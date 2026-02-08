# WebWash Tailwind Demo

![Webwash Tailwind Demo](https://www.webwash.net/wp-content/uploads/2025/12/AS-324-d-tailwind-canvas-thumbnail.jpg)

This Drupal site starter kit demonstrates how to set up a basic Tailwind CSS theme with Drupal's Single Directory Components (SDC) architecture.

**Watch the video and read the full tutorial on how to build this site:** [Tailwind CSS Theme Setup for Drupal Canvas](https://www.webwash.net/tailwind-css-theme-setup-for-drupal-canvas/)

> Want to level up your Drupal skills? Join the [WebWash Premium](https://www.webwash.net/premium/) community to access in-depth tutorials, exclusive content, and hands-on projects that help you build professional Drupal sites.

## Table of Contents

- [WebWash Tailwind Demo](#webwash-tailwind-demo)
  - [Table of Contents](#table-of-contents)
  - [Screenshots](#screenshots)
    - [Connect with Us](#connect-with-us)
  - [Requirements](#requirements)
  - [What's Included](#whats-included)
  - [Quick Start](#quick-start)
  - [Getting Started](#getting-started)
    - [Installation](#installation)
  - [Theme Documentation](#theme-documentation)
  - [Technology Stack](#technology-stack)

## Screenshots

<img src="https://www.webwash.net/wp-content/uploads/2026/01/2026-01-18_14-30-08-scaled.jpg" width="60%" alt="WebWash Tailwind Demo Screenshot 1">

<img src="https://www.webwash.net/wp-content/uploads/2026/01/2026-01-18_14-30-46-scaled.jpg" width="60%" alt="WebWash Tailwind Demo Screenshot 2">

### Connect with Us

Stay connected with WebWash for the latest Drupal tutorials, tips, and updates on modern web development.

**WebWash:** 💻 [Website](https://www.webwash.net/) · ✉️ [Newsletter](https://www.webwash.net/newsletter/) · 🎥 [YouTube](https://www.youtube.com/@WebWash) · 💼 [LinkedIn](https://www.linkedin.com/company/webwash/) · ✖️ [X/Twitter](https://x.com/webwashnet) · 🦋 [Bluesky](https://bsky.app/profile/webwash.net) · 📱 [TikTok](https://www.tiktok.com/@webwashnet)

**Ivan Zugec:** 🎥 [YouTube](https://www.youtube.com/@ivanzugec) · 💼 [LinkedIn](https://www.linkedin.com/in/ivanzugec/) · ✖️ [X/Twitter](https://x.com/ivanzugec) · 🦋 [Bluesky](https://bsky.app/profile/ivanzugec.com) · 📱 [TikTok](https://www.tiktok.com/@ivanzugec)

## Requirements

- [DDEV](https://ddev.com/) - Make sure you have DDEV installed and set up on your machine

## What's Included

- **Webwash Tailwind Theme** - A modern Drupal theme built with Tailwind CSS v4
- **Canvas Module Integration** - Pre-configured Single Directory Components
- **Recipe-based Installation** - Quick site setup using Drupal recipes

## Quick Start

Get up and running in just a few commands:

```bash
# Clone the repository
git clone git@github.com:WebWash/ww-tailwind-site.git

# Navigate to the project directory
cd ww-tailwind-site

# Start the DDEV environment
ddev start

# Install Composer dependencies
ddev composer install

# Install the site using the recipe
ddev drush site:install --yes ../recipes/ww_tailwind_site

# Launch the site in your browser
ddev launch

# To log in as admin, generate a one-time login link
ddev drush uli
```

## Getting Started

This project uses a Drupal recipe for easy installation and configuration. The recipe includes all necessary configuration, content types, and theme setup.

### Installation

To install this site using the included recipe, see the installation instructions in:
- [recipes/ww_tailwind_site/README.md](recipes/ww_tailwind_site/README.md)

## Theme Documentation

For detailed information about the Webwash Tailwind theme, including setup instructions, component usage, and development workflow:
- [web/themes/webwash_tailwind/README.md](web/themes/webwash_tailwind/README.md)

## Technology Stack

- Drupal 11
- Tailwind CSS v4
- Vite (build tool)
- Single Directory Components (SDC)
- Node.js v22.14.0
