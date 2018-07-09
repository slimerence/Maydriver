<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/9
 * Time: 21:48
 */

Route::get('/results', 'Frontend\Pages@news');
Route::get('/courses', '\Smartbro\Controllers\CustomController@courses');
Route::get('/learn', '\Smartbro\Controllers\CustomController@learn');