<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/incoming', function() {

	header("Content-type: text/plain");

	$to = $_POST['envelope']['to'];
	$from = $_POST['envelope']['from'];
	$subject = $_POST['headers']['Subject'];
	$plain = $_POST['plain'];
	$html = $_POST['html'];
	$reply = $_POST['reply_plain'];

	if ($to == '33079c4574479c853641@cloudmailin.net'){
		header("HTTP/1.0 200 OK");

		DB::table('reports')->insert(['to' => $to, 'subject' => $subject, 'plain' => $plain, 'html' => $html, 'reply' => $reply, 'from' => $from]);
		
		echo('success');
	}else{
		header("HTTP/1.0 403 OK");
		echo('user not allowed here');
	}
	exit;
});