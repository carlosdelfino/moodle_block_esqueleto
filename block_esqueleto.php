<?php
/**
 *
 * Enter description here ...
 * @author extracbd
 *
 */
class block_esqueleto extends block_base {
	/**
	 *
	 * Enter description here ...
	 */
	public function init() {
		$this->title = get_string('pluginname', 'block_esqueleto');
	}

	public function get_content() {
		// um exemplo de Padrão LazyLoad
		if ($this->content !== null) {
			return $this->content;
		}

		$this->content         =  new stdClass;
		$this->content->text   = 'Exemplo de Texto no corpo do Bloco';
		$this->content->footer = 'Aqui é o Rodapé';

		return $this->content;
	}
}
?>
