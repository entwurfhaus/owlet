<?php

namespace entwurfhaus\owlet\Http\Controllers;

use App\Http\Controllers\Controller;
use entwurfhaus\owlet\Models\Example;

class ExampleController extends Controller {

    private string $msg;

    public function index() {
        $example = new Example('Hello World!');

        if (!empty($example->message)) {
            $msg = $example->message;
        } else {
            $msg = "Silence is golden";
        }

        return view('owlet::index', compact('msg'));
    }

}
