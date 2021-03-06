<?php  
class ControllerModuleSearch extends Controller {
	public function index() {
		$data = array();
		
		$this->load->language('module/search');
		
		$data['text_search'] = $this->language->get('text_search');
		
		// Search		
		if (isset($this->request->get['search'])) {
			$data['search'] = $this->request->get['search'];
		} else {
			$data['search'] = '';
		}
		
		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/search.tpl')) {
			return $this->load->view($this->config->get('config_template') . '/template/module/search.tpl', $data);
		} else {
			return $this->load->view('default/template/module/search.tpl', $data);
		}
	}
}
?>