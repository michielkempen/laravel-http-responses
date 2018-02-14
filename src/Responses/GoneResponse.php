<?php

namespace MichielKempen\HttpHelpers\Responses;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GoneResponse implements Responsable
{
	/**
	 * @var string
	 */
	private $message;

	/**
	 * BadRequestResponse constructor.
	 *
	 * @param string $message
	 */
	public function __construct(string $message = '')
	{
	    $this->message = $message;
	}

	/**
	 * Create an HTTP response that represents the object.
	 *
	 * @param  Request $request
	 * @return Response
	 */
	public function toResponse($request)
	{
		return new Response($this->message, 410);
	}
}