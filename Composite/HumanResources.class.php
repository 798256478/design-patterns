<?php

namespace Composite;

class HumanResources extends CompanyBase
{

    function add(CompanyBase $c)
    {
        throw new Exception("该节点不能增加节点");
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
        echo str_repeat("    ",$deep)."人力资源部门的工作是为公司招聘人才";
        echo "\n";
    }
}