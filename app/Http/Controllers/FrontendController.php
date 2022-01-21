<?php

namespace App\Http\Controllers;

// use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
// use BotMan\BotMan\Messages\Incoming\Answer;

class FrontendController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    // public function handle()
    // {
    //     $botman = app('botman');
  
    //     $botman->hears('{message}', function($botman, $message) {
  
    //         if ($message == 'hi') {
    //             $this->askName($botman);
    //         }else{
    //             $botman->reply("write 'hi' for testing...");
    //         }
  
    //     });
  
    //     $botman->listen();
    // }
  
    /**
     * Place your BotMan logic here.
     */
    // public function askName($botman)
    // {
    //     $botman->ask('Hello! What is your Name?', function(Answer $answer) {
  
    //         $name = $answer->getText();
  
    //         $this->say('Nice to meet you '.$name);
    //     });
    // }

    public function homepage() {
        return view('homepage');
    }
    public function product() {
        return view('product');
    }
    public function aboutus() {
        return view('aboutus');
    }
    public function corrent() {
        return view('corrent');
    }
    public function corrent_one() {
        return view('corrent-one');
    }
    public function corrent_two() {
        return view('corrent-two');
    }
    public function corrent_three() {
        return view('corrent-three');
    }
    public function corrent_four() {
        return view('corrent-four');
    }
}
