/** @type { import('@storybook/server-webpack5').Preview } */
const preview = {
  parameters: {
    controls: {
      matchers: {
        color: /(background|color)$/i,
        date: /Date$/i,
      },
    },

    server: {
      // Point to the Drupal site docroot so Storybook calls Drupal's render route.
      url: "https://drupal11.localhost/storybook/stories/render",
      id: "default",
    },

    a11y: {
      // 'todo' - show a11y violations in the test UI only
      // 'error' - fail CI on a11y violations
      // 'off' - skip a11y checks entirely
      test: "todo",
    },
  },
  decorators: [
    (Story, context) => {
      // Fix the server URL for local development
      if (context.parameters?.server?.url?.includes("http://default/")) {
        context.parameters.server.url = context.parameters.server.url.replace(
          "http://default/",
          "http://localhost:6006/",
        );
      }
      return Story(context);
    },
  ],
};

export default preview;
