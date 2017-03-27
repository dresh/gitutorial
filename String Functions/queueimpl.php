<?php
class item{
    
    public $data =null;
    public $next = null;
    public $prev =null;
    
    public function __construct($data){
        $this->data=$data;
    }
}

class Queue{
    protected $_head=null;
    protected $_tail=null;
    
  public  function insert($data){
        $item = new Item();
        
        if($this->_head == NULL){
            $this->_head=$item;
        }elseif($this->_tail == NULL){
            $this->_tail=$item;
            $this->_head->next =$this->_tail;
            $this->_tail->prev =$this->_head;
        }
        else{
            $this->_tail->next =$item;
            $item ->prev =$this->_tail;
            $this->_tail =$item;
        }
    }
    public  function delete(){
        if(isset($this->_head->data)){
            $temp=$this->_tail;
            $data=$temp->data;
            
            $this->_tail=$this->_tail->prev;
            
            if(isset ($this->_tail->next)){
                $this->_tail->next=null;
            }
            else{
                $this->_tail =$this->_head=null;
            }
            return $data;
        }
        return FALSE;
    }
    public function __toString(){
        $output = '';
        $t =$this->_head;
        while($t){
            $output .= $t->data;
            $t =$t->next;
        }
        return $output;
    }
}
$q = new Queue();

$q->insert(1);
$q->insert(2);
$q->insert(30);
            
            echo $q;
$q->delete();

echo $q;


