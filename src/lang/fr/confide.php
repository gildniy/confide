<?php

return [

    'username'              => 'Utilisateur',
    'password'              => 'Mot de passe',
    'password_confirmation' => 'Confirmez le mot de passe',
    'e_mail'                => 'Email',
    'username_e_mail'       => "Nom d'utilisateur ou Email",

    'signup' => [
        'title'                 => "S'enregistrer",
        'desc'                  => 'Créer un nouveau compte',
        'confirmation_required' => 'Confirmation requise',
        'submit'                => 'Créer un nouveau compte',
    ],

    'login' => [
        'title'           => 'Connexion',
        'desc'            => 'Remplir vos identifiants',
        'forgot_password' => '(mot de passe oublié)',
        'remember'        => 'Se souvenir de moi',
        'submit'          => 'Se connecter',
    ],

    'forgot' => [
        'title'  => 'Mot de passe oublié',
        'submit' => 'Continuer',
    ],

    'alerts' => [
        'account_created'        => 'Votre compte a été créé avec succès. Veuillez vérifier votre boîte email pour les instructions sur la confirmation de votre compte.',
        'instruction_sent'       => 'Merci de consulter votre boîte email et de suivre les instructions sur la confirmation de votre compte.',
        'too_many_attempts'      => 'Trop de tentatives. Veuillez réessayer dans quelques minutes.',
        'wrong_credentials'      => 'Utilisateur, email ou mot de passe incorrect.',
        'not_confirmed'          => "Votre compte n'est pas confirmé. Veuillez vérifier vos emails pour le lien de confirmation.",
        'confirmation'           => 'Votre compte a été confirmé avec succès. Vous pouvez désormais vous connecter.',
        'password_confirmation'  => 'La confirmation du mot de passe ne correspond pas.',
        'wrong_confirmation'     => 'Code de confirmation incorrect',
        'password_forgot'        => 'Les informations de réinitialisation vous ont été envoyées par email.',
        'wrong_password_forgot'  => 'Utilisateur inconnu.',
        'password_reset'         => 'Votre mot de passe a été modifié avec succès.',
        'wrong_password_reset'   => 'Mot de passe incorrect. Veuillez réessayer',
        'wrong_token'            => 'Le token de réinitialisation du mot de passe est incorrect.',
        'duplicated_credentials' => "Les identifiants donnés sont déja utilisés. Veuillez réessayer avec d'autres identifiants.",
    ],

    'email' => [
        'account_confirmation' => [
            'subject'   => 'Confirmation du compte',
            'greetings' => 'Bonjour :name',
            'body'      => 'Veuillez cliquer sur le lien ci-dessous pour confirmer votre compte.',
            'farewell'  => 'Bien à vous.',
        ],

        'password_reset' => [
            'subject'   => 'Réinitialisation du mot de passe',
            'greetings' => 'Bonjour :name',
            'body'      => 'Veuillez cliquer sur le lien ci-dessous pour réinitialiser votre mot de passe.',
            'farewell'  => 'Bien à vous.',
        ],
    ],

];
