<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class MessageSent implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
    	if ($this->data) {

            $data = json_decode($this->data, true, 512, JSON_UNESCAPED_UNICODE);
            /**
             * Here we would add a message sent notification
             * via email ou push using laravel ECHO or anything else
             *
             *
             * But for this particular case we'll just log the information on the logs file
            */

            Log::info($data);
        }
    }
}
