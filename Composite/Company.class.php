<?php

namespace Composite;

class Company extends CompanyBase
{
    protected $item = [];

    public function add(CompanyBase $c)
    {
        $nodeName = $c->getName();

        if(!isset($this->item[$nodeName])){
            $this->item[$nodeName] = $c;
        } else {
            throw new Exception("该节点已存在，节点名称：" . $nodeName);
        }
    }

    function remove(CompanyBase $c)
    {
        $nodeName = $c->getName();

        if(isset($this->item[$nodeName])) {
            unset($this->item[$nodeName]);
        } else {
            throw new Exception("该节点已存在，节点名称：" . $nodeName);
        }
    }

    function show($deep = 0)
    {
        echo str_repeat("-", $deep) . $this->name;
        echo "\n";

        foreach ($this->item as $value){
            $value->show($deep + 4);
        }
    }

    function work($deep = 0)
    {
        foreach ($this->item as $value){
            echo str_repeat("    ", $deep) . "[{$this->name}]\n";
            $value->work($deep + 2);
        }
    }
}