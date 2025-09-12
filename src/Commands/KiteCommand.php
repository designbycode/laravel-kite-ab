<?php

namespace Designbycode\Kite\Commands;

use Illuminate\Console\Command;

class KiteCommand extends Command
{
    public $signature = 'kite';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
