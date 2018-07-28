<?php

namespace App\Controller;

use App\Greeter\Greeter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DefaultController
 *
 * @package App\Controller
 */
class DefaultController extends AbstractController
{
    /**
     * @var Greeter
     */
    private $greeter;

    /**
     * DefaultController constructor.
     *
     * @param Greeter $greeter
     */
    public function __construct(Greeter $greeter)
    {
        $this->greeter = $greeter;
    }

    /**
     * @return Response
     */
    public function index(): Response
    {
        return new Response($this->greeter->getMessage());
    }
}
