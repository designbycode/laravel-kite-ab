# Laravel Kite

[![Latest Version on Packagist](https://img.shields.io/packagist/v/designbycode/kite.svg?style=flat-square)](https://packagist.org/packages/designbycode/kite)
[![Total Downloads](https://img.shields.io/packagist/dt/designbycode/kite.svg?style=flat-square)](https://packagist.org/packages/designbycode/kite)

A set of beautiful, accessible, and customizable Blade components for Laravel, inspired by shadcn/ui. Built with Tailwind CSS and Alpine.js.

## Installation

You can install the package via composer:

```bash
composer require designbycode/kite
```

## Setup

To use the components, you need to include the necessary CSS and JavaScript in your layout. Kite provides Blade directives to make this easy.

Add the `@kiteStyles` directive in the `<head>` of your layout file, and `@kiteScripts` just before the closing `</body>` tag.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    ...
    @kiteStyles
</head>
<body>
    ...
    @kiteScripts
</body>
</html>
```

After adding the directives, you need to publish the assets:

```bash
php artisan vendor:publish --tag="kite-assets"
```

This will copy the compiled CSS and JS to your `public/vendor/kite` directory.

## Usage

You can use the components in your Blade views with the `x-kite::` prefix or the shorter `<kite:` syntax.

### Example

Here is the example from the initial request, now fully functional:

```html
<x-kite::card class="w-full max-w-md mx-auto">
    <div class="flex justify-end">
        <x-kite::theme-toggle />
    </div>

    <div class="space-y-6 mt-4">
        <div>
            <x-kite::heading size="lg">Log in to your account</x-kite::heading>
            <x-kite::text class="mt-2">Welcome back!</x-kite::text>
        </div>

        <div class="space-y-6">
            <x-kite::input label="Email" type="email" name="email" placeholder="Your email address" />

            <x-kite::field>
                <div class="mb-3 flex justify-between">
                    <x-kite::label for="password">Password</x-kite::label>
                    <x-kite::link href="#" variant="subtle" class="text-sm">Forgot password?</x-kite::link>
                </div>
                <x-kite::input type="password" name="password" id="password" placeholder="Your password" />
                <x-kite::error name="password" />
            </x-kite::field>
        </div>

        <div class="space-y-2">
            <x-kite::button variant="primary" class="w-full">Log in</x-kite::button>
            <x-kite::button variant="ghost" class="w-full">Sign up for a new account</x-kite::button>
        </div>
    </div>
</x-kite::card>
```

### Components

This package provides the following components:

-   `Button`
-   `Card`
-   `Error`
-   `Field`
-   `Heading`
-   `Input`
-   `Label`
-   `Link`
-   `Text`
-   `ThemeToggle`

## Theming

Kite uses CSS variables for theming, making it easy to customize the appearance of the components.

### Dark Mode

The library has built-in support for dark mode. To toggle between light and dark themes, you can use the `theme-toggle` component:

```html
<x-kite::theme-toggle />
```

This component will automatically handle switching the theme and persisting the user's choice in `localStorage`.

### Customizing Colors

You can customize the color palette by overriding the CSS variables in your own stylesheet. Make sure to load your custom styles after the `@kiteStyles` directive.

Here are the default variables for the light theme:

```css
:root {
    --background: oklch(1 0 0);
    --foreground: oklch(0.129 0.042 264.695);
    --card: oklch(1 0 0);
    --card-foreground: oklch(0.129 0.042 264.695);
    --popover: oklch(1 0 0);
    --popover-foreground: oklch(0.129 0.042 264.695);
    --primary: oklch(0.208 0.042 265.755);
    --primary-foreground: oklch(0.984 0.003 247.858);
    --secondary: oklch(0.968 0.007 247.896);
    --secondary-foreground: oklch(0.208 0.042 265.755);
    --muted: oklch(0.968 0.007 247.896);
    --muted-foreground: oklch(0.554 0.046 257.417);
    --accent: oklch(0.968 0.007 247.896);
    --accent-foreground: oklch(0.208 0.042 265.755);
    --destructive: oklch(0.577 0.245 27.325);
    --border: oklch(0.929 0.013 255.508);
    --input: oklch(0.929 0.013 255.508);
    --ring: oklch(0.704 0.04 256.788);
    --radius: 0.5rem;
}
```

And for the dark theme:

```css
.dark {
    --background: oklch(0.129 0.042 264.695);
    --foreground: oklch(0.984 0.003 247.858);
    /* ... and so on for other variables */
}
```

## Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
