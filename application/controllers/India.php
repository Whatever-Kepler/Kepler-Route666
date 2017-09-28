<?php
class India extends CI_Controller
{

  public function index() {
    $source = '../data/HappyFace.jpg';

    header("Content-type: image/jpg");
    header('Content-Disposition: inline');
    readfile($source);
  }
}
?>
