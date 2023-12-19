<?php

namespace Contracts;


abstract class AbstractFAModelServiceProvider
{
    protected AbstractFAFactory $modelFactory;

    public function __construct(AbstractFAFactory $factory )
    {
        $this->modelFactory = $factory;
    }

    abstract public function create($data): FAModel;
}
