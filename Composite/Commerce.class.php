<?php

namespace Composite;

class Commerce extends CompanyBase
{

    function add(CompanyBase $c)
    {
        throw new Exception("该节点下不能增加节点");
    }

    function remove(CompanyBase $c)
    {
        throw new Exception("该节点下无子节点");
    }

    function show($deep = 0)
    {
        echo str_repeat("-",$deep).$this->name;
        echo "\n";
    }

    function work($deep = 0)
    {
        echo str_repeat("    ",$deep)."商务部门的工作是为公司赚取利润";
        echo "\n";
    }
}