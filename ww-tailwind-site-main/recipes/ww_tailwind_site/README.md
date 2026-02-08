# Webwash Tailwind Site Recipe

This Drupal recipe provides a complete site installation with the Webwash Tailwind theme, Canvas module, and pre-configured components.

## Installing the Recipe

Install this recipe on a fresh Drupal site:

```bash
ddev drush site:install --yes ../recipes/ww_tailwind_site
```

This will:
- Install and configure the Webwash Tailwind theme
- Set up the Canvas module with Single Directory Components
- Configure content types and necessary site settings
- Import demo content (if included)

## Testing the Recipe

After making changes to your site, you can test the recipe installation:

1. Drop the existing database:
```bash
ddev drush sql:drop -y
```

2. Reinstall using the recipe:
```bash
ddev drush site:install --yes ../recipes/ww_tailwind_site
```

## Exporting Site Changes to Recipe

If you've made configuration changes to your site that you want to include in the recipe:

```bash
ddev drush site:export --destination=../recipes/ww_tailwind_site
```

This exports your current site configuration to the recipe, allowing you to update the recipe with your changes.

## Clearing Recipe Files

To start fresh and remove existing recipe files:

```bash
rm -rf recipes/ww_tailwind_site/content
rm -rf recipes/ww_tailwind_site/config
rm recipes/ww_tailwind_site/recipe.yml
```

After clearing, you can export a fresh recipe using the `site:export` command above.
