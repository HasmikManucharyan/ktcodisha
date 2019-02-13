var index = 1;
var select_rol = 0;
var Modules = function (name, id, parent) {
	this.name = name;
	this.parent = parent;
	this.id = id;
}




var Roles = function (name, id, modules) {
	this.name = name;
	this.module = [];
	for(var l=0; l<modules.length; l++) {
		this.module.push(new Modules(modules[l].name, modules[l].id, id))
	}
	this.id = id;
}
function showRoleMOdules (parent_menu, modules) {

	modules = createTreeData(parent_menu, modules);
	$("#menu_roles").igTree({
		selectionChanging: function (e, args) {
           // Handle event  
           console.log(e, args);
    	},
        // checkboxMode: false,
        singleBranchExpand: true,
        dataSource: modules,
        dataSourceType: 'json',
        initialExpandDepth: 0,
        pathSeparator: '.',
        bindings: {
            textKey: 'module_name',
            valueKey: 'hasChild',
            imageUrlKey: 'module_keyword',
            childDataProperty: 'hasChild'
        },
        dragAndDrop: true,
        dragAndDropSettings: {
            allowDrop: true,
            customDropValidation: function (element) {
                // Validates the drop target
                var valid = true,
              	droppableNode = $(this);
              	if (droppableNode.is('a') && droppableNode.closest('li[data-role=node]').attr('data-value') === 'File') {
                  	valid = false;
              	}
              	return valid;
            }
        }

    });
    
    $("#menu_roles").on('igtreenodedropped', function(evt, ui) {
    	$('#menu_roles').css({'min-height': 'unset'});
    	// console.log(modules);
    	var menu = createTreeFromSend(modules, select_rol);
    	console.log('menu:',menu)
    	$.ajax({
    		method: 'post',
    		url: serverUrl + 'modulesRoles/setRoleEmployee',
    		data: {'modules': menu, 'rol_id': select_rol},
    		success: function (res) {
    			console.log(res);
    		},
    		error: function () {

    		}
    	})
    });
    
}
function showParentModules(paren_modules) {
	$("#paren_menu").igTree({
        // checkboxMode: 'triState',
        singleBranchExpand: true,
        dataSource: $.extend(true, [], paren_modules),
        dataSourceType: 'json',
        initialExpandDepth: 0,
        pathSeparator: '.',
        bindings: {
            textKey: 'module_name',
            valueKey: 'hasChild',
            imageUrlKey: 'module_keyword',
            // childDataProperty: 'hasChild'
        },
        dragAndDrop: true,
        dragAndDropSettings: {
            allowDrop: true,
            customDropValidation: function (element) {
                // Validates the drop target
              console.log(element)
              var valid = true,
              droppableNode = $(this);
              if (droppableNode.is('a') && droppableNode.closest('li[data-role=node]').attr('data-value') === 'File') {
                  valid = false;
              }
              return valid;
            }
        }
    });
}
function showSubModules(sub_modules) {
	// $("#child_menu").html("");
	$("#child_menu").igTree({
                // checkboxMode:  'triState',
                singleBranchExpand: true,
                dataSource: $.extend(true, [], sub_modules),
                dataSourceType: 'json',
                initialExpandDepth: 0,
                pathSeparator: '.',
                bindings: {
                    textKey: 'module_name',
                    valueKey: 'hasChild',
                    imageUrlKey: 'module_keyword',
                    // childDataProperty: 'hasChild'
                },
                dragAndDrop: true,
                dragAndDropSettings: {
                    allowDrop: true,
                    customDropValidation: function (element) {
                        // Validates the drop target
                        var valid = true,
              			droppableNode = $(this);
                        if (droppableNode.is('a') && droppableNode.closest('li[data-role=node]').attr('data-value') === 'File') {
                            valid = false;
                        }
                        return valid;
                    }
                }
            });
}

function get_roles_module (id) {
	select_rol = id;
	var xhr,
		method = 'get',
		overrideMimeType = 'application/form-data',
		url=''+serverUrl+'modulesRoles/getRolesModules?employee='+id;
		if (window.XMLHttpRequest) {
	         // code for IE7+, Firefox, Chrome, Opera, Safari
	        xhr = new XMLHttpRequest()
	    }
	    else {
	         // code for IE6, IE5
	        xhr = new ActiveXObject("Microsoft.XMLHTTP");
	    }
		xhr.open(method, url, true )
		xhr.setRequestHeader('Content-type', overrideMimeType);
		xhr.onreadystatechange = function () {
			if (xhr.readyState === xhr.DONE && xhr.status === 200) {
				var data = JSON.parse(xhr.response);
				showRoleMOdules( data.models, data.subModels );
				showParentModules(data.disableModels);
				showSubModules(data.disableSubModels);
			}
		};
		xhr.send();
}

function add_roles_form (tag_id) {
	var input = document.createElement('input');
	input.type = "text";
	input.id = "rol_name_"+index;
	input.className = 'form-control';
	// $(document).on('keydown', input, function (e) {
	// 	// console.log(e)
	// })
	var button = document.createElement('button');
	button.id = "rol_name_"+index;
	button.innerHTML = 'Save';
	button.setAttribute('data-id', index);
	button.onclick= function (e) {
		var data_id = e.target.getAttribute('data-id');
		var input = document.getElementById('rol_name_' + data_id)
		add_roles(input && input.value)
	}
	var div_form = document.createElement('div');
	div_form.className = 'roles_add';
	div_form.append(input);
	div_form.append(button);    
	document.querySelector(tag_id).append(div_form);
	// console.log(document.querySelector(tag_id));
	index++;
}

function add_roles (name) {
	var xhr,
		method = 'post',
		overrideMimeType = 'application/form-data',
		url=''+serverUrl+'modulesRoles/addRoles?name='+name;
		if (window.XMLHttpRequest) {
	         // code for IE7+, Firefox, Chrome, Opera, Safari
	        xhr = new XMLHttpRequest()
	    }
	    else {
	         // code for IE6, IE5
	        xhr = new ActiveXObject("Microsoft.XMLHTTP");
	    }
		xhr.open(method, url, true )
		xhr.setRequestHeader('Content-type', overrideMimeType);
		xhr.onreadystatechange = function () {
			if (xhr.readyState === xhr.DONE && xhr.status === 200) {
			   	allRoles.push(JSON.parse(xhr.response));


			}
			
		};
		xhr.send();
}





