<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Directmessage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function counts($user) {
        $count_posts = $user->posts()->count();
        $count_directmessages = $user->directmessages()->count();

        return [
            'count_posts' => $count_posts,
            'count_directmessages' => $count_directmessages,
        ];
    }
}
