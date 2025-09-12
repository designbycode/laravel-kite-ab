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
<x-kite::card class="w-full max-w-md mx-auto space-y-6">
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

## Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
