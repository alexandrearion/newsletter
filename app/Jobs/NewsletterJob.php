<?php

namespace App\Jobs;

use App\Mail\NewsletterMail;
use App\Models\Message;
use App\Models\Newsletter;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class NewsletterJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Newsletter $newsletter, public Message $message)
    {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->newsletter->email)->send(new NewsletterMail($this->newsletter->email, $this->message));
    }
}
