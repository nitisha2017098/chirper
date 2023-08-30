<?php

namespace App\Jobs;

use App\Mail\TestHelloEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class TestSendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(){
        $email = new TestHelloEmail();
       Mail::to('nitisingh8863@gmail.com')->send($email);
   }
}

// class TestSendEmail implements ShouldQueue{

//     public function __construct(){
//         //
//     }
//     public function handle(){
//          $email = new TestHelloEmail();
//         Mail::to('johndoe@tests.com')->send($email);
//     }
// }
