<?php

class ModulesRoles_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		Session::init();
	}
	public function addModulesRoles($data) {
		return $this->db->insert('erp_rol', $data);
	}
	public function getRolesModules($id) {
		return $this->db->select("select
										rol_modules.erp_rol_id,
										rol_modules.modules_id,
										rol_modules.pid,
										rol_modules.hasChild,
										modules.id,
										modules.module_mobile,
										modules.module_web,
										modules.module_name,
										modules.module_url,
										modules.module_keyword
									from
										rol_modules
									 JOIN modules on
										rol_modules.modules_id = modules.id
									where
										rol_modules.erp_rol_id = '".$id."' and rol_modules.pid=0");
	}
	public function getRolesSubModules($id) {
		return $this->db->select("select
										rol_modules.erp_rol_id,
										rol_modules.modules_id,
										rol_modules.pid,
										rol_modules.hasChild,
										modules.id,
										modules.module_mobile,
										modules.module_web,
										modules.module_name,
										modules.module_url,
										modules.module_keyword
									from
										rol_modules
									 JOIN modules on
										rol_modules.modules_id = modules.id
									where
										rol_modules.erp_rol_id = '".$id."' and rol_modules.pid>0");
	}
	public function getAllDisableModules ($id) {
		return $this->db->select("select
										*
									from
										modules
									left JOIN rol_modules on
										rol_modules.modules_id != modules.id or modules.id is null
									where
										modules.pid=0 ");
	}
	public function getAllDisableSubModules ($id) {
		return $this->db->select("select
										*
									from
										modules
									left JOIN rol_modules on
										rol_modules.modules_id != modules.id or modules.id is null
									where
										modules.pid>0 ");
	}
	function addOrChangeModules ($modeles, $rol_id){
		$this->db->delete('rol_modules', "erp_rol_id=".$rol_id, 184467440737143434);
		foreach ($modeles as $modele) {
			$this->db->insert('rol_modules', $modele);
		}
		
	}
	
}

