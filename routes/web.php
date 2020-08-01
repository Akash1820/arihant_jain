<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/ajax', function () {
    return view('ajaxdata');
});
Route::get('/chatbat', function () {
    return view('chatbat');
});
Route::get('/footer', function () {
    return view('footer');
});
Route::get('/header', function () {
    return view('header');
});
Route::get('/insert', function () {
    return view('insert');
});
Route::get('/rnt', function () {
    return view('rnt');
});
Route::get('/textlocal', function () {
    return view('textlocal.class');
});
Route::get('/awaree', function () {
    return view('awareness');
});
Route::get('/vandalism', function () {
    return view('vandalism');
});
Route::get('/women', function () {
    return view('women');
});
Route::get('/assault', function () {
    return view('assault');
});
Route::get('/drug', function () {
    return view('drug');
});
Route::get('/financialfraud', function () {
    return view('financialfraud');
});
Route::get('/terrorist', function () {
    return view('terrorist');
});
Route::get('/kidnapping', function () {
    return view('kidnapping');
});
Route::get('/cyber', function () {
    return view('cyber');
});
Route::get('/money', function () {
    return view('money');
});
Route::get('/whitecollar', function () {
    return view('whitecollar');
});
Route::get('/bribery', function () {
    return view('bribery');
});
Route::get('/helpline', function () {
    return view('helpline');
});
Route::get('/res', function () {
    return view('res');
});
Route::get('/resources', function () {
    return view('resources');
});
Route::get('/aware', function () {
    return view('aware');
});
Route::get('/crimerate', function () {
    return view('crimerate');
});
Route::get('/effect', function () {
    return view('effect');
});
Route::get('/need', function () {
    return view('need');
});
Route::get('/phishing', function () {
    return view('phishing');
});
Route::get('/electronicfrogery', function () {
    return view('electronicfrogery');
});
Route::get('/threatning', function () {
    return view('threatning');
});
Route::get('/defamatory', function () {
    return view('defamatory');
});
Route::get('/spoofing', function () {
    return view('spoofing');
});
Route::get('/needofawareness', function () {
    return view('needofawareness');
});
Route::get('/hacking', function () {
    return view('hacking');
});
Route::get('/cpornography', function () {
    return view('cpornography');
});
Route::get('/jacking', function () {
    return view('jacking');
});
Route::get('/sexting', function () {
    return view('sexting');
});
Route::get('/cyberaware', function () {
    return view('cyberaware');
});
Route::get('/faq', function () {
    return view('faq');
});