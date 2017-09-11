<?php

class Stack{
    /**
     * 栈元素
     * @var
     */
    private $stack;

    /**
     * 栈大小
     * @var
     */
    private $size;

    /**
     * 栈顶元素
     * @var
     */
    private $top;

    /**
     * Stack constructor.
     * @param $size
     */
    public function __construct($size){
        $this->initStack($size);
    }

    /**
     * 初始化栈
     * @param $size
     */
    public function initStack($size){
        $this->top = 0;
        $this->size = $size;
    }

    /**
     * 判断是否是满栈
     * @return bool
     */
    public function isFullStack(){
        $status = false;
        if($this->top == $this->size){
            $status = true;
        }
        return $status;
    }

    /**
     * 判断是否是空栈
     * @return bool
     */
    public function isEmptyStack(){
        $status = false;
        if(!$this->top){
            $status = true;
        }
        return $status;
    }

    /**
     * 入栈操作
     * @param $data
     * @return $this
     */
    public function pushStack($data){
        $is_full_stack = $this->isFullStack();
        if($is_full_stack){
            echo "栈满了，无法进行入栈操作";
        }else{
            if($this->top <= $this->size){
                $this->stack[] = $data;
                $this->top++;
                return $this;
            }else{
                echo "栈满了，无法进行入栈操作";
            }
        }
    }

    /**
     * 出栈操作
     * @return $this
     */
    public function popStack(){
        $is_empty_stack = $this->isEmptyStack();
        if($is_empty_stack){
            echo "栈是空的，无法进行出栈操作";
        }else{
            if($this->top){
                unset($this->stack[$this->top - 1]);
                $this->data = array_values($this->stack);
                $this->top--;
                return $this;
            }else{
                echo "栈是空的，无法进行出栈操作";
            }
        }
    }

    /**
     * 列出栈的所有元素
     * @return array
     */
    public function listStack(){
        return $this->stack;
    }
}

$stack = new Stack(10);
$stack->pushStack(1);
$stack->pushStack(2);
$stack->pushStack(3);
$stack->pushStack(4);
$stack->pushStack(5);
$stack->popStack();
$stack->popStack();
$stack->pushStack(6);
$stack->pushStack(7);
$stack->pushStack(8);
$stack->pushStack(9);
$stack->pushStack(10);
$stack->pushStack(11);
$_stack = $stack->listStack();
print_r($_stack);