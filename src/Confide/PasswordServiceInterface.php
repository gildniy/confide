<?php

namespace Zizaco\Confide;

use Illuminate\Contracts\Auth\Authenticatable;

/**
 * A service that abstracts all user password management related methods.
 *
 * @license MIT
 */
interface PasswordServiceInterface
{
    /**
     * Generate a token for password change and saves it in the
     * 'password_reminders' table with the email of the user.
     *
     * @param Authenticatable $user An existent user.
     *
     * @return string Password reset token.
     */
    public function requestChangePassword(Authenticatable $user);

    /**
     * Returns the email associated with the given reset password token.
     *
     * @param string $token
     *
     * @return string Email.
     */
    public function getEmailByToken($token);

    /**
     * Delete the record of the given token from database.
     *
     * @param string $token
     *
     * @return bool Success.
     */
    public function destroyToken($token);
}
