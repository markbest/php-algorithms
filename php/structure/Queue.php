<?php

class Queue{
    /**
     * 队列元素
     * @var array
     */
    private $queue;

    /**
     * 队列大小
     * @var int
     */
    private $size;

    /**
     * Queue constructor.
     */
    public function __construct(){
        $this->queue = array();
        $this->size = 0;
    }

    /**
     * 入队列操作
     * @param $data
     * @return $this
     */
    public function pushQueue($data){
        $this->queue[$this->size++] = $data;
        return $this;
    }

    /**
     * 出队列操作
     * @return $this|bool
     */
    public function popQueue(){
        if(!$this->isEmpty()){
            --$this->size;
            $this->queue = array_slice($this->queue, 1);
            return $this;
        }
        return false;
    }

    /**
     * 判断是否是空队列
     * @return bool
     */
    public function isEmpty(){
        return 0 == $this->size;
    }

    /**
     * 获取队列大小
     * @return int
     */
    public function getSize(){
        return $this->size;
    }

    /**
     * 获取队列列表
     * @return array
     */
    public function listQueue(){
        return $this->queue;
    }
}

$queue = new Queue();
$queue->pushQueue(1)->pushQueue(2)->pushQueue(3)->pushQueue(4);
$queue->popQueue()->popQueue();
$_queue = $queue->listQueue();
print_r($_queue);