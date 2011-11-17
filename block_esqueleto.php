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
		$this->content->text   .= '<br/>';

		// texto inserido nas configurações
		if (! empty($this->config->text)) {
		$this->content->text   .= '<br/>';
			$this->content->text .= 'Texto Configurado: ';
			$this->content->text .= $this->config->text;
		}
		// texto inserido nas configurações
		if (! empty($this->config->inteiro)) {
		$this->content->text   .= '<br/>';
			$this->content->text .= 'Valor Configurado: ';
			$this->content->text .= $this->config->inteiro;
		}

		$this->content->footer = 'Aqui é o Rodapé';

		return $this->content;
	}

	public function instance_allow_config() {
		return true;
	}
}
?>
