<?php

return [

    'username'              => 'Username',
    'password'              => 'Password',
    'password_confirmation' => 'Ulangi Password',
    'e_mail'                => 'Email',
    'username_e_mail'       => 'Username atau Email',

    'signup' => [
        'title'                 => 'Daftar',
        'desc'                  => 'Daftar akun baru',
        'confirmation_required' => 'Butuh konfirmasi email',
        'submit'                => 'Buat akun baru',
    ],

    'login' => [
        'title'           => 'Login',
        'desc'            => 'Enter your credentials',
        'forgot_password' => '(lupa password)',
        'remember'        => 'Ingat saya',
        'submit'          => 'Login',
    ],

    'forgot' => [
        'title'  => 'Lupa password',
        'submit' => 'Lanjutkan',
    ],

    'alerts' => [
        'account_created'         => 'Akun anda telah berhasil dibuat.',
        'instructions_sent'       => 'Silahkan periksa email anda yang berisi instruksi konfirmasi akun anda..',
        'too_many_attempts'       => 'Terlalu banyak percobaan login. Silahkan ulangi beberapa menit lagi.',
        'wrong_credentials'       => 'Username, email atau password tidak benar.',
        'not_confirmed'           => 'Akun anda belum dikonfirmasi. Silahkan periksa email anda untuk link konfirmasi.',
        'confirmation'            => 'Akun anda telah dikonfirmasi! Anda bisa login sekarang.',
        'wrong_confirmation'      => 'Kode konfirmasi tidak benar.',
        'password_forgot'         => 'Informasi mengenai pengaturan ulang password telah dikirim ke email anda.',
        'wrong_password_forgot'   => 'User tidak ditemukan.',
        'password_reset'          => 'Password anda telah berhasil dirubah.',
        'wrong_password_reset'    => 'Password tidak benar. Silahkan coba lagi',
        'wrong_token'             => 'Token untuk pengaturan ulang password tidak sah.',
        'duplicated_credentials'  => 'Informasi yang anda berikan sudah ada yang menggunakan. Silahkan coba dengan informasi lain.',
    ],

    'email' => [
        'account_confirmation' => [
            'subject'   => 'Konfirmasi Akun',
            'greetings' => 'Halo :name',
            'body'      => 'Silahkan klik pada link di bawah ini untuk mengkonfirmasi akun anda.',
            'farewell'  => 'Salam',
        ],

        'password_reset' => [
            'subject'   => 'Reset Password',
            'greetings' => 'Halo :name',
            'body'      => 'Silahkan klik pada link di bawah ini untuk mengganti password anda',
            'farewell'  => 'Salam',
        ],
    ],

];
