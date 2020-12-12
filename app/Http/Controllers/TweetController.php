<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;

class TweetController extends Controller
{
    // 投稿
    public function tweet(Request $request)
    {
            $twitter = new TwitterOAuth(env('TWITTER_API_KEY'),
            env('TWITTER_API_SECRET'),
            env('TWITTER_CLIENT_ID_ACCESS_TOKEN'),
            env('TWITTER_CLIENT_ID_ACCESS_TOKEN_SECRET'));

            $tweet = $twitter->post("statuses/update", [
            "status" => "飛ばされました！"
            ]);

            var_dump($tweet);
    }
}
