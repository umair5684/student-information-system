<?php

namespace App\Console\Commands;

use App\Actions\StoreStudents;
use App\ThirdPartyApi\ReqRes;
use Illuminate\Console\Command;

class DummyCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dummy:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(ReqRes $api, StoreStudents $store)
    {
        $data = $api->fetchUsers();

        $created = $store->save($data);

        $this->info('Students created: ' . $created);
    }
}



