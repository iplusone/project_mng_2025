<?php 

use Illuminate\Support\Facades\Route;

Route::get('/posts', function () {
    return [
        ['id' => 1, 'title' => 'こんにちは Laravel'],
        ['id' => 2, 'title' => 'Reactとつながったよ'],
    ];
});
