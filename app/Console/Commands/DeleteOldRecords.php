<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Carbon\Carbon; // Import Carbon for date manipulation

use App\Models\challanReason;

use Mail;



class DeleteOldRecords extends Command
{
    protected $signature = 'records:delete-old';
    protected $description = 'Delete records older than one day with a specific status';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $yesterday = Carbon::now()->subDay();
        challanReason::where('status', '!=', '0')
            ->where('created_at', '<', $yesterday)
            ->delete();
        $this->info('Old records deleted successfully!');
            
        // $data = array('data'=>'Cron Testing');
        // Mail::send('mail',$data,function($message){
        //    $message->to('riazahmad03486@gmail.com')
        //    ->subject('Cron testing');
        // });



    }
}
