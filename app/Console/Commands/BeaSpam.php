<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class BeaSpam extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'beaspam';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for spamming BEA!!!! 💩️💩️💩️ ';

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
        // return 0;
        Mail::raw('Beaaaaaaaaa!!!!!! 💩️💩️💩️💩️💩️', function ($message) {
            $message->from('omargponce@gmail.com', 'Omar Ponce');
            // $message->sender('john@johndoe.com', 'John Doe');
            $message->to('bmfdesign@hotmail.com', 'Bea 💩️');
            $message->subject('💩️💩️💩️💩️💩️');
            $message->priority(3);
            // $message->attach('pathToFile');
        });

        echo "I sended 💩️💩️💩️ to Bea! \n";
    }
}
