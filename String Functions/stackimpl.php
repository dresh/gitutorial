<?php

class stack{
    protected $stack;
    protected $size;
    
    public function __construct($size=50){
        $this->stack = array();
        $this->size = $size;
    }
    
    public function push($data){
        if(count($this->stack)< $this->size){
            array_unshift($this->stack,$data);
        }
        else{
            throw new RuntimeException("satck overflow");
        }
    }
    public function pop($data){
        if(empty($this->stack)){
             throw new RuntimeException("satck underflow");
        }
           else{
               array_shift($this->stack);
           }
    }
}
           $stack =new Stack();
           $satck-> push(4);
           $stack-> push(2);
           
           while($stack ->valid()){
    echo $stack->current(),PHP_EOL;
         $stack->next();
}
       foreach($stack as $s){
    echo $s."n";
}
