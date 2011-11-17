<?php
 
class block_esqueleto_edit_form extends block_edit_form {
 
    protected function specific_definition($mform) {
 
        // Título de cabeçalho da seção conforme o arquivo de lingaugem
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));
 
        // Um exemplo de variável string com valor padrão
        $mform->addElement('text', 'config_text', get_string('textfieldname', 'block_esqueleto'));
        $mform->setDefault('config_text', 'valor padrão');
        $mform->setType('config_text', PARAM_TEXT);  

        // Um outro exemplo que so aceita Inteiro
        $mform->addElement('text', 'config_inteiro', get_string('intergerfieldname', 'block_esqueleto'));
        $mform->setDefault('config_inteiro', 500);
        $mform->setType('config_inteiro', PARAM_INT);  

    }
}
 
?>