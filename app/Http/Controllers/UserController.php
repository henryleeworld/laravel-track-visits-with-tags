<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::find(1);
        echo $user->name . ' ' . '拜訪次數：' . visits($user)->count() . PHP_EOL;
        echo $user->name . ' ' . '新增拜訪 1 次' . PHP_EOL;
        visits($user)->seconds(1)->increment();
        sleep(1);
        echo $user->name . ' ' . '拜訪次數：' . visits($user)->count() . PHP_EOL;
        echo $user->name . ' ' . '減少拜訪 1 次' . PHP_EOL;
        visits($user)->seconds(1)->decrement();
        sleep(1);
        echo $user->name . ' ' . '拜訪次數：' . visits($user)->count() . PHP_EOL;
        echo $user->name . ' ' . '新增拜訪 3 次' . PHP_EOL;
        visits($user)->seconds(1)->increment(3);
        sleep(1);
        echo $user->name . ' ' . '拜訪次數：' . visits($user)->count() . PHP_EOL;
        echo $user->name . ' ' . '減少拜訪 2 次' . PHP_EOL;
        visits($user)->seconds(1)->decrement(2);
        sleep(1);
        echo $user->name . ' ' . '拜訪次數：' . visits($user)->count() . PHP_EOL;
    }
}
