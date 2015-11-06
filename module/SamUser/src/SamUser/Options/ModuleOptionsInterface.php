<?php

namespace SamUser\Options;

interface ModuleOptionsInterface
{
    public function getUserMapper();

    public function setUserMapper($mapper);
}
