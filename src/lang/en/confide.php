<?php

return [

    'username'              => 'Username',
    'password'              => 'Password',
    'password_confirmation' => 'Confirm Password',
    'e_mail'                => 'Email',
    'username_e_mail'       => 'Username or Email',

    'signup' => [
        'title'                 => 'Signup',
        'desc'                  => 'Signup for new account',
        'confirmation_required' => 'Confirmation required',
        'submit'                => 'Create new account',
    ],

    'login' => [
        'title'           => 'Login',
        'desc'            => 'Enter your credentials',
        'forgot_password' => '(forgot password)',
        'remember'        => 'Remember me',
        'submit'          => 'Login',
    ],

    'forgot' => [
        'title'  => 'Forgot password',
        'submit' => 'Continue',
    ],

    'alerts' => [
        'account_created'         => 'Your account has been successfully created.',
        'instructions_sent'       => 'Please check your email for the instructions on how to confirm your account.',
        'too_many_attempts'       => 'Too many attempts. Try again in few minutes.',
        'wrong_credentials'       => 'Incorrect username, email or password.',
        'not_confirmed'           => 'Your account may not be confirmed. Check your email for the confirmation link',
        'confirmation'            => 'Your account has been confirmed! You may now login.',
        'password_confirmation'   => 'The passwords did not match.',
        'wrong_confirmation'      => 'Wrong confirmation code.',
        'password_forgot'         => 'The information regarding password reset was sent to your email.',
        'wrong_password_forgot'   => 'User not found.',
        'password_reset'          => 'Your password has been changed successfully.',
        'wrong_password_reset'    => 'Invalid password. Try again',
        'wrong_token'             => 'The password reset token is not valid.',
        'duplicated_credentials'  => 'The credentials provided have already been used. Try with different credentials.',
    ],

    'email' => [
        'account_confirmation' => [
            'subject'   => 'Account Confirmation',
            'greetings' => 'Hello :name',
            'body'      => 'Please access the link below to confirm your account.',
            'farewell'  => 'Regards',
        ],

        'password_reset' => [
            'subject'   => 'Password Reset',
            'greetings' => 'Hello :name',
            'body'      => 'Access the following link to change your password',
            'farewell'  => 'Regards',
        ],
    ],

];
