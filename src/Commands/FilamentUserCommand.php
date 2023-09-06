<?php

namespace Dearvn\FilamentUser\Commands;

use Illuminate\Console\Command;

class FilamentUserCommand extends Command
{
    public $signature = 'filament-user';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
