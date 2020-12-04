<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => 'タイトルのテスト〜',
        'text' => '記事のテスト〜〜〜〜！テキストテキストテキストテキストテキスト
        テキストテキストテキストテキストテキスト。\n
        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。
        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。',
    ];
});
