<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation {
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list' => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
        'custom_list' => 'layouts\partials\error_list'
    ];
    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------

    public $passowrd_request = [
        'email' => [
            'rules' => 'required|valid_email',
            'errors' => [
                'required' => 'Morate uneti email.',
                'valid_email' => 'Uneti email nije validan.'
            ]
        ]
    ];
    public $profile_change = [
        'tel' => [
            'rules' => 'numeric|permit_empty',
            'errors' => [
                'numeric' => "Polje telefon sme sadrzati samo cifre"
            ]
        ],
        'email' => [
            'rules' => 'valid_email|permit_empty',
            'errors' => [
                'valid_email' => 'Uneti email nije validan.'
            ]
        ],
    ];
    public $signup = [
        'ime' => [
            'rules' => 'required|alpha_space',
            'errors' => [
                'required' => 'Morate uneti ime.',
                'alpha_space' => 'Polje ime moze sadrzati samo slova i razmak'
            ]
        ],
        'prezime' => [
            'rules' => 'required|alpha_space',
            'errors' => [
                'required' => 'Morate uneti prezime.',
                'alpha_space' => 'Polje prezime moze sadrzati samo slova i razmak'
            ]
        ],
        'jmbg' => [
            'rules' => 'required|numeric|exact_length[13]',
            'errors' => [
                'required' => 'Morate uneti JMBG.',
                'numeric' => 'Uneti JMBG nije validan. JMBG sme sadrzati samo cifre.',
                'exact_length' => "Polje JMBG Mora sadrzati tacno 13 cifara."
            ]
        ],
        'lk' => [
            'rules' => 'required|numeric|exact_length[8,9]',
            'errors' => [
                'required' => 'Morate uneti Broj licne karte.',
                'numeric' => 'Uneti Broj licne karte nije validan. Broj licne karte sme sadrzati samo cifre.',
                'exact_length' => "Polje Broj licne karte Mora sadrzati tacno 8 ili 9 cifara."
            ]
        ],
        'pol' => [
            'rules' => 'required|in_list[m,z]',
            'errors' => [
                'required' => 'Morate izabrati pol.',
                'in_list' => "Mozete izabrati samo zenski ili muski pol"
            ]
        ],
        'tel' => [
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'Morate uneti telefon.',
                'numeric' => "Polje telefon sme sadrzati samo cifre"
            ]
        ],
        'email' => [
            'rules' => 'required|valid_email',
            'errors' => [
                'required' => 'Morate uneti email.',
                'valid_email' => 'Uneti email nije validan.'
            ]
        ],
        'sifra' => [
            'rules' => 'required|min_length[8]|regex_match[/(?=.*?[A-Z])(?=.*?[#?!@$%^&*-])/]',
            'errors' => [
                'required' => 'Morate uneti lozinku.',
                'min_length' => "Polje sifra mora sadrzati minimum 8 karaktera od cega minimum 1 karakter mora biti veliko slovo i mora sadrzati minimum jedan specijalan karakter.",
                'regex_match' => "Polje sifra mora sadrzati minimum 8 karaktera od cega minimum 1 karakter mora biti veliko slovo i mora sadrzati minimum jedan specijalan karakter."
            ]
        ],
    ];
    public $clientquestion = [
        'subject' => [
            'rules' => 'required|min_length[3]|max_length[20]',
            'errors' => [
                'required' => 'Morate uneti naslov pitanja.',
                'min_length' => 'Tekst naslova mora sadrzati najmanje 3 karaktera.',
                'max_length' => 'Tekst naslova moze sadrzati najvise 20 karaktera.'
            ]
        ],
        'message' => [
            'rules' => 'required|min_length[10]|max_length[200]',
            'errors' => [
                'required' => 'Morate uneti tekst pitanja.',
                'min_length' => 'Tekst pitanja mora sadrzati najmanje 10 karaktera.',
                'max_length' => 'Tekst pitanja moze sadrzati najvise 200 karaktera.'
            ]
        ],
        'struka' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Morate izabrati struku.'
            ]
        ]
    ];
    public $guestquestion = [
        'subject' => [
            'rules' => 'required|min_length[3]|max_length[20]',
            'errors' => [
                'required' => 'Morate uneti naslov pitanja.',
                'min_length' => 'Tekst naslova mora sadrzati najmanje 3 karaktera.',
                'max_length' => 'Tekst naslova moze sadrzati najvise 20 karaktera.'
            ]
        ],
        'message' => [
            'rules' => 'required|min_length[10]|max_length[200]',
            'errors' => [
                'required' => 'Morate uneti tekst pitanja.',
                'min_length' => 'Tekst pitanja mora sadrzati najmanje 10 karaktera.',
                'max_length' => 'Tekst pitanja moze sadrzati najvise 200 karaktera.'
            ]
        ],
        'struka' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Morate izabrati struku.'
            ]
        ],
        'email' => [
            'rules' => 'required|valid_email',
            'errors' => [
                'required' => 'Morate uneti email.',
                'valid_email' => 'Uneti email nije validan.'
            ]
        ],
        'name' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Morate uneti ime i prezime ili makar jedno od ta dva.'
            ]
        ]
    ];
    public $answer = [
        'message' => [
            'rules' => 'required|max_length[200]',
            'errors' => [
                'required' => 'Morate uneti tekst odgovora.',
                'max_length' => 'Tekst odgovora moze sadrzati najvise 200 karaktera.'
            ]
        ]
    ];
    public $brisanje = [
        'message' => [
            'rules' => 'required|max_length[200]',
            'errors' => [
                'required' => 'Morate uneti tekst odgovora.',
                'max_length' => 'Tekst odgovora moze sadrzati najvise 200 karaktera.'
            ]
        ]
    ];
    public $admin_profile_change = [
        'ime' => [
            'rules' => 'alpha_space|permit_empty',
            'errors' => [
                
                'alpha_space' => 'Polje ime moze sadrzati samo slova i razmak'
            ]
        ],
        'prezime' => [
            'rules' => 'alpha_space|permit_empty',
            'errors' => [
                
                'alpha_space' => 'Polje prezime moze sadrzati samo slova i razmak'
            ]
        ],
        'jmbg' => [
            'rules' => 'numeric|exact_length[13]|permit_empty',
            'errors' => [
               
                'numeric' => 'Uneti JMBG nije validan. JMBG sme sadrzati samo cifre.',
                'exact_length' => "Polje JMBG Mora sadrzati tacno 13 cifara."
            ]
        ],
        'brlk' => [
            'rules' => 'numeric|exact_length[8,9]|permit_empty',
            'errors' => [
                
                'numeric' => 'Uneti Broj licne karte nije validan. Broj licne karte sme sadrzati samo cifre.',
                'exact_length' => "Polje Broj licne karte Mora sadrzati tacno 8 ili 9 cifara."
            ]
        ],
        'pol' => [
            'rules' => 'in_list[m,z]|permit_empty',
            'errors' => [
                
                'in_list' => "Mozete izabrati samo zenski ili muski pol"
            ]
        ],
        'tel' => [
            'rules' => 'numeric|permit_empty',
            'errors' => [
                
                'numeric' => "Polje telefon sme sadrzati samo cifre"
            ]
        ],
        'email' => [
            'rules' => 'valid_email|permit_empty',
            'errors' => [
                
                'valid_email' => 'Uneti email nije validan.'
            ]
        ]
    ];

}
