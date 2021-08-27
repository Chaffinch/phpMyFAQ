<?php

/**
 * Manages user authentication with Apache's SSO authentication, e.g. mod_sspi
 * or mod_auth_kerb.
 *
 * This Source Code Form is subject to the terms of the Mozilla Public License,
 * v. 2.0. If a copy of the MPL was not distributed with this file, You can
 * obtain one at http://mozilla.org/MPL/2.0/.
 *
 * @package   phpMyFAQ
 * @author    Thorsten Rinne <thorsten@phpmyfaq.de>
 * @copyright 2011-2021 phpMyFAQ Team
 * @license   http://www.mozilla.org/MPL/2.0/ Mozilla Public License Version 2.0
 * @link      https://www.phpmyfaq.de
 * @since     2011-06-22
 */

namespace phpMyFAQ\Auth;

use phpMyFAQ\Auth;
use phpMyFAQ\User;

/**
 * Class Sso
 *
 * @package phpMyFAQ\Auth
 */
class AuthSso extends Auth implements AuthDriverInterface
{
    /**
     * Always returns true because of SSO.
     *
     * @param string $login Login name
     * @param string $pass  Password
     *
     * @return bool
     */
    public function changePassword(string $login, string $pass): bool
    {
        return true;
    }

    /**
     * Always returns true because of SSO.
     *
     * @param string $login Login name
     *
     * @return bool
     */
    public function delete(string $login): bool
    {
        return true;
    }

    /**
     * Checks if the username of the remote user is equal to the login name.
     *
     * @param string $login Login name
     * @param string $password Password
     * @param array|null $optionalData Optional data
     *
     * @return bool
     */
    public function checkPassword(string $login, string $password, array $optionalData = null): bool
    {
        if (!isset($_SERVER['REMOTE_USER'])) {
            return false;
        } else {
            // Check if "DOMAIN\user", "user@DOMAIN" or only "user"
            $remoteUser = explode('\\', $_SERVER['REMOTE_USER']);
            if (is_array($remoteUser) && count($remoteUser) > 1) {
                $user = $remoteUser[1];
            } else {
                $remoteUser = explode('@', $_SERVER['REMOTE_USER']);
                if (is_array($remoteUser) && count($remoteUser) > 1) {
                    $user = $remoteUser[0];
                } else {
                    $user = $_SERVER['REMOTE_USER'];
                }
            }
            if ($user === $login) {
                $this->add($login, $password);

                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * Always returns true because of SSO.
     *
     * @param string $login
     * @param string $password
     * @param  string $domain
     * @return bool
     * @throws
     */
    public function add(string $login, string $password, $domain = ''): bool
    {
        if ($this->config->get('ldap.ldapSupport')) {
            // LDAP/AD + SSO
            $authLdap = new AuthLdap($this->config);
            return $authLdap->add($login, null, $domain);
        } else {
            // SSO without LDAP/AD
            $user = new User($this->config);
            $result = $user->createUser($login, null, $domain);

            if ($result) {
                $user->setStatus('active');
            }

            // Set user information
            $user->setUserData(['display_name' => $login]);

            return $result;
        }
    }

    /**
     * Returns 1, if $_SERVER['REMOTE_USER'] is set.
     *
     * @param string $login Login name
     * @param array|null $optionalData Optional data
     *
     * @return int
     */
    public function checkLogin(string $login, array $optionalData = null): int
    {
        return isset($_SERVER['REMOTE_USER']) ? 1 : 0;
    }
}
