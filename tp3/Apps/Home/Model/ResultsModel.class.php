<?php
namespace Home\Model;
use Think\Model;
/**
 * results 模型 
 * 操作 results 表
 */
class ResultsModel extends Model 
{
    /**
     * 重新定义表
     */
    protected $tableName = 'results';

    /**
     * 所有的学生的成绩单
     */
    public function all()
    {
        header("Content-type:text/html;charset=utf-8");
        
        $db=M('user'); //主表
        $rs=array();
        $rs=$db 
            ->join("results r on user.uid=r.rid") //附表连主表
            ->field
                ("
                    user.name,
                    r.chinese,
                    r.math,
                    r.english,
                    r.writing,
                    r.science,
                    r.sum,
                    r.average
                ")
            ->select();

        $data=array();
        $data=array_keys($rs[0]);
        
            echo "<table marginwight='0,0'>";
                echo "<thead>";
                        echo "<tr>";
                                echo "<th>姓名</th>";
                                echo "<th>语文</th>";
                                echo "<th>数学</th>";
                                echo "<th>英语</th>";
                                echo "<th>文综</th>";
                                echo "<th>理综</th>";
                                echo "<th>总分</th>";
                                echo "<th>平均分</th>";
                            echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                    for ($j=0; $j <=count($rs)-1  ; $j++) { 
                        echo "<tr>";
                        for ($i=0; $i <=count($rs[$j])-1 ; $i++) { 
                            echo "<td>".$rs[$j][$data[$i]]."</td>";
                        }
                        echo "</tr>";
                    }
                echo "</tbody>";
            echo "</table>";
            
    }

    /**
     * 登录的学生自己的成绩单
     */
    public function myself()
    {
        $db=M('user'); //主表
        $where=session('name');
        $rs=$db 
            ->join("results r on user.uid=r.rid") //附表连主表
            ->where("user.name='$where'")
            ->field
                ("
                    user.name,
                    r.chinese,
                    r.math,
                    r.english,
                    r.writing,
                    r.science,
                    r.sum,
                    r.average
                ")
            ->find();
        $data=array(
            '0'=>array($rs['name']),
            '1'=>array($rs['chinese']),
            '2'=>array($rs['math']),
            '3'=>array($rs['english']),
            '4'=>array($rs['writing']),
            '5'=>array($rs['science']),
            '6'=>array($rs['sum']),
            '7'=>array($rs['average'])
        );
        echo "<link rel='stylesheet' href='../../../Public/css/TablePractice.css'>";
        echo "<table>";
		    echo "<thead>";
				echo "<tr>";
                echo "<th>姓名</th>";
                echo "<th>语文</th>";
                echo "<th>数学</th>";
                echo "<th>英语</th>";
                echo "<th>文综</th>";
                echo "<th>理综</th>";
                echo "<th>总分</th>";
                echo "<th>平均分</th>";
				echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                echo "<tr>";
                for ($i=0; $i <count($rs) ; $i++) 
                { 
                    echo "<td>".$data[$i][0]."</td>";
                }
                echo "</tr>";
            echo "</tbody>";
    }

     /**
     * 如果学生发现没有自己的成绩信息，
     * 则可以自行添加
     */
    public function grade()
    {
        header("Content-type:text/html;charset=utf-8");

        $where=array(
            'user.name'=>session('name')
        );
        $uid=M('user')->where($where)->field('uid')->find();
        
        $rid=$uid['uid'];
        $chinese =   I("chinese");
        $math               =   I("math"); 
        $english           =   I("english"); 
        $writing       =   I("writing"); 
        $science       =   I("science");

        $sum = $chinese+$math+$english+$writing+$science;
        $average = $sum / 5;

        $data = array(
            'rid'                   => $rid,
            'chinese'           =>  $chinese,
            'math'               =>  $math ,
            'english'           =>   $english,
            'writing'         =>  $writing,
            'science'        =>  $science,
            'sum'               =>  $sum,
            'average'          =>  sprintf("%.2f", $average)
        );

        $ins=M('results')
                ->where('rid='.$rid)
                ->add($data);
        
        if ($ins) 
        {
            echo "添加成功<h3><a href='../Show/index'>点击这里跳转</a></h3>";
        }
        else 
        {
            echo "添加失败";
        }
    }
}
