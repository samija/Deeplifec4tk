<?php

namespace SamUser\Options;

interface UserCreateOptionsInterface
{
    public function getCreateUserAutoPassword();

    public function setCreateUserAutoPassword($createUserAutoPassword);

    public function getCreateFormElements();

    public function setCreateFormElements(array $elements);
}
