<?php
/**
 *    India controller
 */
class India extends CI_Controller
{

  public function index() {
    // source destination of the image
    $source = '../data/HappyFace.jpg';

    // set mime type for that image (jpeg, png, etc)
    header("Content-type: image/jpg");
    header('Content-Disposition: inline');
    // read file and render 
    readfile($source);
  }
}
?>