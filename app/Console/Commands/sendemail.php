<?php

namespace App\Console\Commands;

use App\Imports\emailImport;
use App\Mail\mailBlast;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class sendemail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for sending emails';

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
    public function handle()
    {
        echo "I shall send thy email! 📫️ \n";

        Excel::import(new emailImport(), 'tester.xlsx', 'public');


        echo "Done! - ✅️✅️✅️✅️ 📫️ \n";

        // return 0;
    }
}
