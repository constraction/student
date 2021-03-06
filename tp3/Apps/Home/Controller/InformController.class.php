<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\StudentModel;
class InformController extends Controller 
{
    /**
     * 显示所有学生的个人信息
     */
    public function index()
    {
        
        $inform=D('Student');
        $inform->index();
        $this->display("Apps\Home\View\Inform\inform.html");
    }

    /**
     * 显示修改个人信息的页面
     */
    public function updata_index()
    {
        $this->display('Apps\Home\View\Inform\insert.html');
    }

    /**
     * 修改个人信息的操作
     */
    public function updata()
    {
        $inform=D('Student');
        $inform->insert();
    }

    /**
     * 显示新增个人成绩的页面
     */
    public function gindex()
    {
        $this->display('Apps\Home\View\Inform\grade.html');
    }

    /**
     * 新增个人成绩的操作
     */
    public function ginsert()
    {
        $grade=D('Results');
        $grade->grade();
    }
}
