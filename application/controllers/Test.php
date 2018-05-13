<?php
/**
 * Created by PhpStorm.
 * User: zhupengjun
 * Date: 2018/5/10
 * Time: 16:31
 */

class Test extends CI_Controller
{
   public function one($a="",$b=""){
       echo"<pre>";
//       var_dump($this->input->get(NULL,TRUE),$a,$b,$this->input->method());

       $param=$this->input->get_post('ff',TRUE); //现获取get，在获取post
       $param=$this->input->post_get('ff',TRUE); //与上面相反
//       var_dump($param);

       $this->output->set_output($param);
   }

   public function jpg_get(){
       $this->output
           ->set_content_type('png')
           ->set_output(file_get_contents('static/img/something.png'));

//       $this->output
//           ->set_content_type('application/json')
//           ->set_output(json_encode(array('foo' => 'bar')));

//       $this->output
//           ->set_content_type('xml')
//           ->set_output(file_get_contents('static/xml/b.xsd'));
   }

   //加载视图
    public function views_len(){
//        $this->load->view('name');
//        $this->load->vars('title','打几把');
        $data['list']=[
            ['id'=>2,'name'=>'sss','email'=>'564564@qq.com'],
            ['id'=>2,'name'=>'sss','email'=>'564564@qq.com'],
            ['id'=>2,'name'=>'sss','email'=>'564564@qq.com'],
        ];
        $data['title']='的方式防守打法';
        $this->load->vars($data);
        $this->load->view('test/name');
    }
    //超级对象
    public function super_objs(){
                 var_dump($this->load);
    }

    //pathinfo路由获取
    public function routenew(){
//       echo"zhupengjun";
        echo"<pre>";
        $default = array('name', 'gender', 'location');
        var_dump($this->uri->uri_to_assoc(3,$default));
    }
    //output输出类
    public function outPut(){
        $data['res']=[
            ['id'=>2,'name'=>'sss','email'=>'564564@qq.com'],
            ['id'=>2,'name'=>'sss','email'=>'564564@qq.com'],
            ['id'=>2,'name'=>'sss','email'=>'564564@qq.com'],
        ];
        $data['message']="SUCCESS";
        $data['code']=1;
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
    }
    public function datacreate()
    {
//         $this->load->database('test');
//         $this->load->database();

//         $sql="select *from t_oilgas_access";
         $sql1="select *from t_oilgas_access";
//         $sql2="select *from xue";
         $res1=$this->db->query($sql1);
//         $res2=$this->db->query($sql2);
//         $res=$res1->result();
//         $res=$res1->row();
//         $res=$res1->result_array();
        $this->load->model('Blog_model');
//         $res=$res1->result('Blog_model');
//         $res=$res1->result();
//         $res=$this->db->get('t_oilgas_access');
//        $res1->free_result();
//        $res1->data_seek(1); // Skip the first 5 rows
//        $res = $res1->unbuffered_row();
        $res=$this->db->select('*')->from('t_oilgas_access')->get();
        $res=$res->result_array();
         echo"<pre>";var_dump($res);
//        echo $res1->num_rows();
//        echo"<br>";
//        echo $this->db->version();
    }
    public function session_get()
    {
        $this->load->library('session');
        $newdata = array(
            'username'  => 'johndoe',
            'email'     => 'johndoe@some-site.com',
            'logged_in' => TRUE
        );

        $this->session->set_userdata($newdata);
    }
    public function gets()
    {
        $this->load->library('session');
       var_dump($this->session->userdata());

    }
}