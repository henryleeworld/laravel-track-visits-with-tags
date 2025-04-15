<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::find(1);
        echo $user->name . __('\'s number of visits: ') . visits($user)->count() . PHP_EOL;
        echo $user->name . ' ' . __('added :visit_times visit', ['visit_times' => ($visitTimes = 1)]) . PHP_EOL;
        visits($user)->seconds(1)->increment();
        sleep(1);
        echo $user->name . __('\'s number of visits: ') . visits($user)->count() . PHP_EOL;
        echo $user->name . ' ' . __('reduced :visit_times visit', ['visit_times' => ($visitTimes = 1)]) . PHP_EOL;
        visits($user)->seconds(1)->decrement();
        sleep(1);
        echo $user->name . __('\'s number of visits: ') . visits($user)->count() . PHP_EOL;
        echo $user->name . ' ' . __('added :visit_times visits', ['visit_times' => ($visitTimes = 3)]) . PHP_EOL;
        visits($user)->seconds(1)->increment($visitTimes);
        sleep(1);
        echo $user->name . __('\'s number of visits: ') . visits($user)->count() . PHP_EOL;
        echo $user->name . ' ' . __('reduced :visit_times visits', ['visit_times' => ($visitTimes = 2)]) . PHP_EOL;
        visits($user)->seconds(1)->decrement($visitTimes);
        sleep(1);
        echo $user->name . __('\'s number of visits: ') . visits($user)->count() . PHP_EOL;
    }
}
