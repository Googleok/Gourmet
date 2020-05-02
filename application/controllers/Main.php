<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * @author USER
 */
class Main extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * http://example.com/index.php/welcome
     * - or -
     * http://example.com/index.php/welcome/index
     * - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     *
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('/main/index');
    }

    public function about()
    {
        $this->load->view('about');
    }

    public function contact()
    {
        $this->load->view('contact');
    }

    public function news()
    {
        $this->load->view('news');
    }

    public function recipes()
    {
        $this->load->view('/main/recipes');
    }

    public function services()
    {
        $this->load->view('services');
    }

    public function single()
    {
        $this->load->view('single');
    }
}
