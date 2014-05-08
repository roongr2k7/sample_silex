<?php
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class PostController {
  public function get(Request $req) {
    $data = array();
    if ($req->get('id') == 1) {
      $data = array('name' => 'Roong');
    }
    return new JsonResponse($data);
  }
}
