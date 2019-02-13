var tree = [];

function findSub(sub_menu_item, sub_menu){
	sub_menu_item.hasChild = []
	for(var l=0; l < sub_menu.length; l++) {
		if(sub_menu[l].pid == sub_menu_item.id){
			if(sub_menu[l].hasChild == '0') {
				sub_menu[l].hasChild=""
			} else {
				findSub(sub_menu[l], sub_menu)
			}
			sub_menu_item.hasChild.push(sub_menu[l]);
		}
	}
	
}


function createTreeData (parent, sub_menu) {
	for(var i=0; parent && i < parent.length; i++) {
		tree[i] = parent[i]
		if(parent[i].hasChild > 0) {
			tree[i].hasChild = []
			findSub(parent[i],sub_menu)
		}
		if(parent[i].hasChild == '0' || parent[i].hasChild == 0 ) {
			tree[i].hasChild=""
		}
	}
	console.log('tree', tree)
	return tree;
}

var menu = []
function createSubMenu(submenu, pid, select_rol){
	for(var s = 0; s < submenu.length; s++) {
		var hasChild = 0;
		menu.push(Object.assign({}, submenu[s]));
		var index = menu.length - 1
		if(submenu[s].hasChild && typeof submenu[s].hasChild == 'object' && submenu[s].hasChild.length > 0) {
			createSubMenu(submenu[s].hasChild, submenu[s].id);
			hasChild = 1;
		}
		menu[index].erp_rol_id = select_rol;
		menu[index].modules_id = menu[index].id;
		delete menu[index].id ;
		delete menu[index].module_mobile ;
		delete menu[index].module_web ;
		delete menu[index].module_name ;
		delete menu[index].module_url ;
		delete menu[index].module_keyword ;
		menu[index].hasChild = hasChild;
		menu[index].pid = pid;
		
	}

}
function createTreeFromSend (modules, select_rol) {
	menu = [];
	console.log('modules',modules)
	for(var i=0; i<modules.length; i++){
		var hasChild = 0;
		menu.push(Object.assign({}, modules[i]) );
		var indexMenu = menu.length - 1
		if(modules[i].hasChild && typeof modules[i].hasChild == 'object' && modules[i].hasChild.length > 0) {
			createSubMenu(modules[i].hasChild, modules[i].id, select_rol);
			hasChild = 1;
		}
		menu[indexMenu].erp_rol_id = select_rol;
		menu[indexMenu].modules_id = menu[indexMenu].id;
		delete menu[indexMenu].id ;
		delete menu[indexMenu].module_mobile ;
		delete menu[indexMenu].module_web ;
		delete menu[indexMenu].module_name ;
		delete menu[indexMenu].module_url ;
		delete menu[indexMenu].module_keyword ;
		menu[indexMenu].hasChild = hasChild;
		menu[indexMenu].pid = 0;
	}
	return menu;
}