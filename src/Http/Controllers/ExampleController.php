<?php

namespace Entwurfhaus\Owlet\Http\Controllers;

use App\Http\Controllers\Controller;
use Entwurfhaus\Owlet\Models\Example;

class ExampleController extends Controller {

    /**
     * @var string
     */
    private string $msg;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
