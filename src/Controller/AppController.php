<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @author Thomas Egain <tegain@altima-agency.com>
 */
class AppController extends Controller
{

  /**
   * Matches / exactly
   *
   * @Route("/", name="blog_list")
   */
  public function list()
  {
    var_dump('toto');
    return new Response('');
  }
}
