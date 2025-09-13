<?php

it('can render a primary button', function () {
    $view = $this->blade('<x-kite::button>Click me</x-kite::button>');

    $view->assertSee('Click me');
    $view->assertSee('bg-primary');
});

it('can render a card with content', function () {
    $view = $this->blade('<x-kite::card>Hello World</x-kite::card>');

    $view->assertSee('Hello World');
    $view->assertSee('bg-card');
});

it('can render a large heading', function () {
    $view = $this->blade('<x-kite::heading size="lg">My Heading</x-kite::heading>');

    $view->assertSee('My Heading');
    $view->assertSee('text-2xl');
});

it('can render an input with a label', function () {
    $view = $this->blade('<x-kite::input label="Your Name" name="name" />');

    $view->assertSee('Your Name');
    $view->assertSee('for="name"', false);
    $view->assertSee('border-input');
});

it('can render an error message for a field', function () {
    $this->withViewErrors(['name' => 'The name field is required.']);

    $view = $this->blade('<x-kite::error name="name" />');

    $view->assertSee('The name field is required.');
    $view->assertSee('text-destructive');
});

it('can render the theme toggle button', function () {
    $view = $this->blade('<x-kite::theme-toggle />');

    $view->assertSee('Toggle theme');
    $view->assertSee('x-data');
});
