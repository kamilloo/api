<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;
use Laravel\Passport\Passport;
use Psr\Http\Message\ServerRequestInterface;
use League\OAuth2\Server\AuthorizationServer;
use Illuminate\Contracts\Routing\ResponseFactory;
use Zend\Diactoros\Response as Psr7Response;
use Laravel\Passport\Bridge\User as BridgeUser;



class Kohana extends Controller
{

	protected $server;

    /**
     * The response factory implementation.
     *
     * @var ResponseFactory
     */
    protected $response;


	public function __construct(AuthorizationServer $server, ResponseFactory $response)
    {
        $this->server = $server;
        $this->response = $response;
    }

    public function oauthorize(Request $request, ServerRequestInterface $psrRequest)
    {
		$this->validate($request, [
			'client_id' => 'required',
			'redirect_uri' => 'required|active_url',
			'response_type' => 'required',
			//'scope' => 'required',
			'user_id' => 'required|exists:users,id',
			]);

		$authRequest = $this->server->validateAuthorizationRequest($psrRequest);

		$authRequest->setUser(new BridgeUser($request->input('user_id')));

        $authRequest->setAuthorizationApproved(true);

		return $this->server->completeAuthorizationRequest(
                $authRequest , new Psr7Response
            );
    }

}
