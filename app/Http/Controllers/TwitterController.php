<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use Throwable;
use Illuminate\Http\Request;

class TwitterController extends Controller
{
    //Twitterの認証ページへユーザーをリダイレクト
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    //ログイン
    public function handleProviderCallback()
    {
        try {
            //認証結果の受け取り
            $user = Socialite::driver('twitter')->user();
        } catch (Throwable $e) {
            return redirect('/');
        }

        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser, true);


        return redirect()->route('home');
    }

    //Twitterユーザー情報をもとに、ユーザー情報を取得するか新たにユーザーを作成する
    public function findOrCreateUser($twitterUser)
    {
        $authUser = User::where('twitter_id', $twitterUser->id)->first();

        if ($authUser) {
            return $authUser;
        }

        //DBにユーザー情報がなければ作成する
        return User::create([
            'name' => $twitterUser->nickname,
            'twitter_id' => $twitterUser->id,
            'avatar' => $twitterUser->avatar_original,
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
