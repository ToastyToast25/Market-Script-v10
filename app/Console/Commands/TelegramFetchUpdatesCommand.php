<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\TelegramController;

class TelegramFetchUpdatesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
  protected $signature = 'telegram:fetch-updates';

    /**
     * The console command description.
     *
     * @var string
     */
  
   
    protected $description = 'Fetch updates from Telegram API';


    /**
     * Execute the console command.
     */
    public function handle()
    {
        
         $telegramController = new TelegramController();
         $telegramController->getUpdate();
         $this->info('Telegram updates processed successfully.');
         
        
        // dd("hello");
        //   Artisan::call('route:call', ['route' => '/telegram_update']);
        
        // $output = Artisan::output();
        // dd($output);
        // $this->info($output);
    }
}
