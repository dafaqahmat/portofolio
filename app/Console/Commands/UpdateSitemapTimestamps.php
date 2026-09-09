<?php

namespace App\Console\Commands;

use App\Models\Project;
use Illuminate\Console\Command;

class UpdateSitemapTimestamps extends Command
{
    protected $signature = 'app:update-sitemap-timestamps';

    protected $description = 'Update all project timestamps to reflect current time for sitemap';

    public function handle(): int
    {
        $count = Project::query()->update(['updated_at' => now()]);

        $this->info("Updated {$count} project(s) timestamps to " . now()->toDateTimeString());

        return Command::SUCCESS;
    }
}
