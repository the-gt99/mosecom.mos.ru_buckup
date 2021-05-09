<?php

namespace App\Http\Controllers;

use App\Services\Mosecom\MosecomService;
use App\Services\Mosecom\MosecomParserService;
use Illuminate\Http\Request;

class ParserController extends Controller
{
	/** @var MosecomService $mosecomService */
    private $mosecomService;

    public function __construct(MosecomParserService $mosecomParser)
    {
        $this->mosecomService = $mosecomService;
    }

	/**
     * @param string $name
     *
     * @return array
     */
    public function parse(string $name = null)
    {
        $response = $this->mosecomService->parse($name);

        return $response;
    }
}
