<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\ShowModel;
class ShowController extends Controller {
    
    public function index()
    {
        header("Content-type:text/html;charset=utf-8");
        $show=new ShowModel();
        $show->result();
        $this -> display('Apps\Home\View\Show\show.html');
    }
    public function session()
    {
        header("Content-type:text/html;charset=utf-8");
        $grd=new ShowModel();
        $grd->index();
        $this->display();
    }
    public function table()
    {
        
    }
    public function result()
    {
        session('name',null);
        $this->display('Apps\Home\View\Login\login.html');
    }
    
}