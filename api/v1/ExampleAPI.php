<?php
/**
 * Created by PhpStorm.
 * User: Dionisio Gabriel Rigo de Souza Machado - https://github.com/diomac
 * Date: 02/03/2019
 * Time: 14:37
 */

namespace FrontController\api\v1;


use Diomac\API\Resource;
use Diomac\API\Response;

class ExampleAPI extends Resource
{
    /**
     * @method get
     * @route /front-controller
     * @return Response
     */
    function api(): Response
    {
        $this->response->setCode(Response::OK);
        $this->response->setBody('example API REST');
        return $this->response;
    }
}
