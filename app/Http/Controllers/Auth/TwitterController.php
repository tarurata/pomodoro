<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use Auth;

class TwitterController extends Controller
{
    // ログイン
    public function redirectToProvider() {
        return Socialite::driver('twitter')->redirect();
    }

    public function handleProviderCallback($twitter) {
        try {
            $twitterUser = Socialite::driver('twitter')->user();
        } catch (Exception $e) {
            return redirect('/')->with('oauth_error', '予期せぬエラーが発生しました');
            //return redirect('auth/twitter');
        }

        // 各自ログイン処理
        // 例
        // $user = User::where('auth_id', $twitterUser->id)->first();
        // if (!$user) {
        //     $user = User::create([
        //         'auth_id' => $twitterUser->id
        //   ]);
        // }
        // Auth::login($user);

        return redirect('/')->with($twitterUser);
    }

    public function logout(Request $request) {
        // 各自ログアウト処理
        // 例
        Auth::logout();
        return redirect('/');
    }


}
