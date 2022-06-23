<?php 
class DB{
    private $host='mysql:host=localhost;dbname=matchmaker;charset=utf8';
    private $uname='root';
    private $pass='';
    private $db;

    function __construct()
    {
        try{
            $this->db= new PDO($this->host,$this->uname,$this->pass);
        }
        catch(PDOException $e)
        {
            echo "Hata".$e->getMessage();
        }

    }
    public function insert($tableName,$keys,$params,$inputCount) {
        $sql='Insert into '.$tableName.' ('.$keys.') values(';

        for($i=1;$i<$inputCount;$i=$i+1)
        {
            $sql.='?,';
        }
        $sql.='?)';
        $query= $this->db->prepare($sql);

        for($i=1;$i<=$inputCount;$i+=1)
        {
            $query->bindParam($i, $params[$i-1]);
        }

        if($query->execute())
        {
            return true;
        }
        else{
            return false;
        }



    }
    public function userControl($username,$password) {
        $sql='Select * from users where username=? and password=?';
        $hashed= password_hash($password );
        $query= $this->db->prepare($sql);
        $query->bindParam(1, $username);
        $query->bindParam(2,$password);
        $query->execute();
        $ret=$query->fetch(PDO::FETCH_ASSOC);
        if(!empty($ret))
        {
            return $ret;
        }
        else{
            return false;
        }

    }
    public function login($u_id,$token,$endtime)
    {
    }



    public function isLogin()
    {

    }


    public function select() {


    }




 





 




}








?>