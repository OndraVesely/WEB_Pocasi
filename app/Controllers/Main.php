<?php
 
namespace App\Controllers;
 
use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\Bundesland;
 
class Main extends BaseController
{
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        return parent::initController($request, $response, $logger);
    }
    public function index()
    {
        $model = new Bundesland();
        $seznamZemi = $model->orderBy("name", "asc")->findAll();
        var_dump($seznamZemi);
    }
}
