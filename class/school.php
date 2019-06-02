<?php

class Student{
	
	private $server_name = "localhost";
	private $username = "root";
	private $password = "";
	private $db="school";
	public $conn;
	private $arr=array();
	private $field;
	private $tbl_name;
	public function __construct(){
		$this->conn= new mysqli( $this->server_name,$this->username,$this->password,$this->db);
		
		if($this->conn->connect_error){
			echo die("The connection is error: ". $this->conn->connect_error);
			
		}
		else{
			
			echo "connected is succesfull"."</br>";
		}
	}
	
	public function insert_data($data){
	$sql= "INSERT INTO ".$this->tbl_name." VALUES(";
		
		for($i=0;$i<count($this->arr)-1;$i++){
			if($data[$i]=='null'){
				$sql=$sql.$data[$i].", ";
			}
			elseif(is_numeric($data[$i])){
				$sql=$sql.$data[$i].", ";
			}
			else{
				$sql=$sql."'".$data[$i]."'".", ";
			}
		}
		$sql=substr_replace($sql,"",-2);
		$sql=$sql.")";
		if($this->conn->query($sql) === TRUE){
			echo "Data insert Successfull.";
		}
		
		else{
			echo "Data insert error".$sql.$this->conn->connect_error;
		}
		$this->conn->close();
	}
	
	public function update_data($data){
		
		$sql="UPDATE ".$this->tbl_name." SET  ";
		
		for($i=1;$i<count($this->arr)-1;$i++){
			if(is_numeric($data[$i])){
				$sql=$sql.$this->arr[$i]."=".$data[$i].",  ";
			}
			else{
				
				$sql=$sql.$this->arr[$i]."="."'".$data[$i]."'".",  ";
			}
			
		}
		
		$sql=substr_replace($sql,"",-3);
		$sql=$sql." WHERE ".$this->field."=".$data[0];
		
		if($this->conn->query($sql)===TRUE){
			echo "Data updated!";
		}
		
		else{
			
			return "Updated error!"."  ".$this->conn->connect_error;
		}
	}
	
	public function get_field_name($tbl_name){
		$sql="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".$this->db."' AND TABLE_NAME = '".$tbl_name."'";
		$this->tbl_name=$tbl_name;
		$result=$this->conn->query($sql);
		while($row[] = $result->fetch_array()){
    			
			}
		foreach($row as $test){
			$this->arr[]=$test[0];
		}
		
	}
	public function where($field){
		$this->field=$field;
	}
	public function show(){
		
		echo $this->arr[1];
	}
}

?>
<?php
	
	//$test= new Student;
	
	//$test->get_field_name("student");
	//$test->where("s_id");
	//$test->update_data(array(2,'jame','female','1995-07-27','kampot'))
    //$test->insert_data(array('null','Dara','male','1996-08-09','kep'));
?>
















