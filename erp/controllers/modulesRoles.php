<?php

class ModulesRoles extends Controller {

	function __construct() {
        parent::__construct();
          Session::init(); 
    }
    function index() {
    }
    function addRoles() {
       $data = [
            'role_name' => $_REQUEST['name']
       ];
       $id = $this->model->addModulesRoles($data);
       echo json_encode(['name' => $data['role_name'], 'id' => $id]);
    }
    function getRolesModules() {
        $id = $_REQUEST['employee'];
        $models = $this->model->getRolesModules($id);
        $subModels = $this->model->getRolesSubModules($id);
        $disableModels = $this->model->getAllDisableModules($id);
        $disableSubModels = $this->model->getAllDisableSubModules($id);
        echo json_encode([
            'models' => $models, 
            'subModels' => $subModels, 
            'disableSubModels' => $disableSubModels,
            'disableModels' => $disableModels
        ]);
    }
    function setRoleEmployee () {
        $modules = $_POST['modules'];
        $rol_id = $_POST['rol_id'];
        $this->model->addOrChangeModules($modules, $rol_id);
    }
}
