<?php

namespace Acme\TheForce;

use Message;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TheForceController extends Controller
{

	// returns a custom facade
    public function customDisplay($message = "May the force, be with you!") {

    $newMessage =  Message::displayMessage($message);

    return view('the-force::test', compact('newMessage'));

    }

    public function display() {

    	$message =  Message::displayMessage();
    	return view('the-force::test-one', compact('message'));
    }
}
