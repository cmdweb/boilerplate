<?php
namespace Controllers;

use Alcatraz\Kernel\Controller;
use Alcatraz\Owl\Owl;
use Services\ExampleService;

class IndexController extends Controller
{
    /**
     * @AllowUsers
     */
    public function Index()
    {
        $service = new ExampleService();

        $model = new \stdClass();
        $model->Text = $service->GetExample();

        $this->View(null, $model);
    }
}