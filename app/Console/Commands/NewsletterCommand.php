<?php

namespace App\Console\Commands;

use App\Jobs\NewsletterJob;
use App\Mail\NewsletterMail;
use App\Models\Message;
use App\Models\Newsletter;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class NewsletterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send the newsletter for our followers.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $messages = Message::all();
        $newsletters = Newsletter::all();

        $messages->each(function (Message $message) use ($newsletters) {
            $newsletters->each(function (Newsletter $newsletter) use ($message) {
                NewsletterJob::dispatch($newsletter, $message);
            });
        });

        $this->line('Foi tudão');
    }
}
