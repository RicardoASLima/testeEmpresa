<?php

class ManualConnection extends TPage {

    const TABLENAME = 'tpessoa';
    const PRIMARYKEY= 'id';
    const IDPOLICY =  'max'; // {max, serial}

    public function __construct() {
        parent::__construct();
        try {
            $conn = $this->connection();
            // make query
            $result = $conn->query('SELECT * from tpessoa, tpessoa_endereco order by id');

            // iterate results
            foreach ($result as $row)
            {
                print $row['id'] . '-';
                print $row['nome'] . "<br>\n";
                print $row['dt_nascimento'] . "<br>\n";
                print $row['logradouro'] . "<br>\n";
                print $row['cep'] . "<br>\n";
            }
            TTransaction::close(); // close transaction
        }
        catch (Exception $e)
        {
            new TMessage('error', $e->getMessage());
        }
    }

    public static function connection() {
        $db = array();
        $db['host'] = '127.0.0.1';
        $db['port'] = '56406';
        $db['name'] = 'app/database/samples.db';
        $db['user'] = 'PostgreSQL';
        $db['pass'] = '';
        $db['type'] = 'pgsql';

        TTransaction::open(NULL, $db); // open transaction
        $conn = TTransaction::get(); // get PDO connection

        return $conn;
    }

    public function create($params, $id = NULL) {

        return var_dump($params);

        /*
        parent::__construct($id);
        parent::addAttribute('name');
        parent::addAttribute('address');
        parent::addAttribute('phone');
        parent::addAttribute('birthdate');
        parent::addAttribute('status');
        parent::addAttribute('email');
        parent::addAttribute('gender');
        parent::addAttribute('category_id');
        parent::addAttribute('city_id');
        */
    }
}