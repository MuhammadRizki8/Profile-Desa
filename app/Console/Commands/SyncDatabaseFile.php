<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Google\Cloud\Storage\StorageClient;

class SyncDatabaseFile extends Command
{
    protected $signature = 'sync:database-file';
    protected $description = 'Download database.sqlite from Google Cloud Storage';

    public function handle()
    {
        $storage = new StorageClient([
            'projectId' => env('GOOGLE_CLOUD_PROJECT_ID'),
            'keyFilePath' => base_path(env('GOOGLE_CLOUD_KEY_FILE')),
        ]);

        $bucket = $storage->bucket(env('GOOGLE_CLOUD_BUCKET'));
        $object = $bucket->object('database.sqlite');

        $localPath = database_path('database.sqlite');
        $object->downloadToFile($localPath);

        $this->info('Database file synced successfully to: ' . $localPath);
    }
}
