<?php
namespace App\Http\Controllers;


use Illuminate\Contracts\View\Factory as View;
use Illuminate\Http\Request;
use League\CommonMark\CommonMarkConverter;

class MarkdownController extends Controller
{

    public function index(View $view)
    {
        return $view->make('homepage');
    }

    public function parse(Request $request, CommonMarkConverter $parser)
    {
        $text = $request->get('text');
        $result = $parser->convertToHtml($text);

        return ['html' => $result];
    }
}