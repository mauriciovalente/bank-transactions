<?php

namespace Transaction\Repository;

class AuthenticatedServiceMock implements IAuthenticatedService
{
    public function authenticate() : string
    {
        return '{"message" : "Autorizado"}';
    }
}