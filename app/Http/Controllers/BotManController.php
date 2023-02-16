<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\Drivers\Facebook\FacebookDriver;
use Illuminate\Http\Request;


class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        info("came to handle", []);
        $config = [
            // Your driver-specific configuration
            'facebook' => [
                'token' => 'EABW94dvaIZAcBAIQsc9VaYHDICDXKuhcQijzZCIMnlgwLYLK7JNPwBBmYvywPeswrCCAal7IsU8mTKmXrpe2HpZALcv9jrt0461aVPuDL9uQxw85IVzM5yq5ZAIf9ki9tBnqfCfbMSULsNNVfjYAeiUpTtCbKFLnYrhUUFZBhrY1XDLNsSoFV',
                'app_secret' => '32789489aca32094a9ee81b01004c185',
                'verification' => '1234',
            ]
        ];

        DriverManager::loadDriver(FacebookDriver::class);

        $botman = BotManFactory::create($config);

        $botman->hears('{message}', function (BotMan $botman, $message) {
            $botman->reply("write anything");

//            if ($message === 'hi') {
//                $this->askName($botman);
//            } else {
//                $botman->reply("write 'hi' for testing...");
//            }
        });
//        $botman = app("botman");

        $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function (Answer $answer) {
            $name = $answer->getText();

            $this->say('Nice to meet you ' . $name);
        });
    }
}
