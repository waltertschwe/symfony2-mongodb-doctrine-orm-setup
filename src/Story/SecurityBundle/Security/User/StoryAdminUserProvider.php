<?php

namespace Acme\WebserviceUserBundle\Security\User;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

class StoryAdminUserProvider implements UserProviderInterface
{
    public function loadUserByUsername($username)
    {
        // make a call to your webservice here
        $userData = array('username' => 'walter',
						  'password' => 'hello',
						  'salt'     => 'adfadsfasdf2123',
						  'roles'     => '');
        // pretend it returns an array on success, false if there is no user

        if ($userData) {
        	$username = 'walter';
			$password = 'hello';
            $salt = 'adsfadfadf';
			$roles = '';

            // ...

            return new StoryAdminUser($username, $password, $salt, $roles);
        }

        throw new UsernameNotFoundException(sprintf('Username "%s" does not exist.', $username));
    }

    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof StoryAdminUser) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class)
    {
        return $class === 'Story\SecurityBundle\Security\User\WebserviceUser';
    }
}