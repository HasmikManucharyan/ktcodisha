var detals;

$(document).ready(function(){
	// console.log("detals ready")

	var Detals = function (info, income, expenses, complianc, list) {
		this.info = info
		this.income = income
		this.expenses = expenses
		this.complianc = complianc
		this.list = list
		this.selectId = null
		this.slideControl = true
		this.activeTab = 'showInfoModal'
	}
	Detals.prototype.addBlock = function(selecterName) {
		var block =	'<div class="detals-modal">'+
						'<button class="close-detals"><span class="lnr lnr-chevron-right"></span></button>'+
						'<div class="modal-content-slide">'+
							'<h5>LiveRatrack</h5>'+
							'<div class="search-block">'+
								'<input type="text" class="search" placeholder="Search...">'+
							'</div>'+
							'<div class="car-list">'+
							'</div>'+
						'</div>'+
					'</div>'
		$(selecterName).append(block)
		this.initCloseButton()
		this.addList(this.list)
		this.addSearchEvent()
	};
	Detals.prototype.initCloseButton = function() {
		var that = this
		$(document).on('show.bs.modal', '.modal', function(){
			if(that.slideControl) {
	    		$('.close-detals').click()
			}
	  	});
	  	$(document).on('click', '.text-show, .map-show, .map-text-show', function(){
			if(that.slideControl) {
	    		$('.close-detals').click()
			}
		})
		$('.detals-modal .close-detals').on('click', function () {
			var bWhidth = $(this).width();
			var windowWhidth = $('.modal-content-slide').width();
			if(that.slideControl){
				$('.modal-content-slide').animate({left: windowWhidth+2 + 'px'}, 1000, function (){
					$('.detals-modal').css({'width': bWhidth+ 'px','height': bWhidth+ 'px'})
					$('.detals-modal').addClass('close-modal')
				})
				that.slideControl = false;
			} else {
				// $('.detals-modal').css({'width': 'max-content', height: 'auto'})
				$('.detals-modal').attr('style', '')
				$('.modal-content-slide').animate({left: -bWhidth-2+ 'px'}, 1000, function(){
					$('.detals-modal').removeClass('close-modal')
					$('.detals-modal').attr('style', '')
				})
				that.slideControl = true
			}
		})
	}
	Detals.prototype.updateData = function(_vehicalData){
		this.list = _vehicalData
		let dataArray = [];
		Array.prototype.forEach.call(_vehicalData, (elements)=>{
			if($('.search-block .search').val() == ''){
				dataArray.push(elements)
			}
			else{
				if(elements.name.toLowerCase().includes($('.search-block .search').val().toLowerCase())){
					dataArray.push(elements)
				}
			}
		})
			// console.log('dataArray',dataArray)
		$.each($('.list-item').children(), (ind, el)=>{
			if($(el).attr('data-id')){
				// console.log(_vehicalData)
				let itemData = _vehicalData[Number($(el).attr('data-id'))-1];
				$('.vehicalName', el).text(itemData.name)
				$('.speedKBD', el).text(parseInt(parseInt(itemData.speed) * 1.852) + 'km/h')
				// console.log('itemData',_vehicalData[Number($(el).attr('data-id'))-1],Number($(el).attr('data-id'))-1, itemData.name, itemData.speed)
			}
			else{
				this.addList(dataArray)
			}
		})
		if($('.active_vehicle', $('.list-item').children())[0]){
			var modal = this[this.activeTab]($('.active_vehicle', $('.list-item').children()).parents("li"));
		}
	};
	Detals.prototype.addSearchEvent = function() {
		var that = this;
		$('.search-block .search').on('input', function () {
			let dataArray = [];
			if(_vehicalData){
				Array.prototype.forEach.call(_vehicalData, (elements, index)=>{
					if(elements.name.toLowerCase().includes($(this).val().toLowerCase())){
						elements.dataId = index
						dataArray.push(elements)
					}
				})
			}
			that.addList(dataArray)
		})
	}
	Detals.prototype.addList = function(dataFilter) {
		$('.car-list').html("");
		var that = this;
		var ul = $('<ul class="list-item"></ul>');
		if(dataFilter){
			for(var i = 0; i <  dataFilter.length; i++) {
				var controlDataId = i+1;
				if(dataFilter[i].dataId) {
					controlDataId = dataFilter[i].dataId+1
				}
				let li = $(`<li data-id=${controlDataId}></li>`);
				li.html( `
					<div class="common_line">
						<div class="left_aside">	
							<span class="lnr lnr-chevron-right slide_down_trafic"></span>	
							<span class="vehicalName">${dataFilter[i].name}</span>
						</div>
						<div class="right_aside"> 
							<span class="speedKBD">${parseInt(parseInt(dataFilter[i].speed) * 1.852)}km/h</span>	
							<span class="${ (!IdleTimeColor(dataFilter[i].lastupdate)) && dataFilter[i].speed > 0 ? 'isConnectKBD' : 'isNotConnectKBD'} ${IdleTimeColor(dataFilter[i].lastupdate) ? 'idle':''} vehicalStatus"></span> 	
						</div>
					</div>
					<div class="detals-wrap">
						<div class="detals-button"></div>
						<div class="detals-block"></div>
					</div>
				`)
				// $(".button-info").click()
				ul.append($(li))
				li.find('.common_line').on('click', function(e){
					// console.log('click')
					that.addButton(li);
					let _spanChevron = $(this).find('.slide_down_trafic');
					if(_spanChevron.hasClass('active_vehicle')){
						_spanChevron.removeClass('active_vehicle');
						$(li).find(".detals-wrap").height("0px");
					}
					else{
						$('.active_vehicle').removeClass('active_vehicle');
						_spanChevron.addClass("active_vehicle")
						that.selectId = li.attr('data-id');
						that.showInfoModal(li);
						$(".detals-wrap").height("0px")
						that.contentHeight(li, '.detals-wrap');
					}
				})
			}
			
			// that.addScrol();
			if(dataFilter.length == 0){
				let li = $(`<li></li>`);
				li.html( `<span>No Result</span>`);
				ul.append($(li))
			}
		}
		else{
			let li = $(`<li></li>`);
			li.html( `<img class="loaderGIF" src="./images/loader.gif">`);
			ul.append($(li))
		}
		$('.car-list').append(ul);
	};
	Detals.prototype.addButton = function(parentLi) {
		$('.detals-button', parentLi).html("")
		let arrImgIconPath = [
			{default:"button1.png", active:"button1active.png"},
			{default:"button2.png", active:"button2active.png"},
			{default:"button3.png", active:"button3active.png"},
			{default:"button4.png", active:"button4active.png"},
		];
		var buttons = 	`<div class="buttons">
							<button data-proto="showInfoModal" class="button-info active"><img src="./images/${arrImgIconPath[0].active}">Info</button>
							<button data-proto="showIncomeModal" class="button-income"><img src="./images/${arrImgIconPath[1].default}">Income</button>
							<button data-proto="showExpensesModal" class="button-expenses"><img src="./images/${arrImgIconPath[2].default}">Expenses</button>
							<button data-proto="showComplianceModal" class="button-compliance"><img src="./images/${arrImgIconPath[3].default}">Compliance</button>
						</div>`
		$('.detals-button', parentLi).append(buttons)
		this.addButtonEvent(arrImgIconPath, $('.buttons', parentLi), parentLi)
	};
	Detals.prototype.addSetActiv = function(off, on) {
		off.removeClass('active')
		on.addClass('active')
	}
	Detals.prototype.addButtonEvent = function(imgPathArr,thatBtnsWrap, thatParentLi) {
		var that = this;

		Array.from(thatBtnsWrap.children()).forEach((element, index)=>{
			element.onclick = function(){
				// The second Loop for remove active ImagePath of the all icons 
				Array.from(thatBtnsWrap.children()).forEach((element, index)=>{
					$(element).find('img').attr('src', `./images/${imgPathArr[index].default}`);
				})
				// ______________________
				$(this).find('img').attr('src', `./images/${imgPathArr[index].active}`);
				that.addSetActiv($('.buttons button'),$(this))
				that[$(this).attr('data-proto')](thatParentLi);
				that.contentHeight(thatParentLi, '.detals-wrap');
				that.activeTab = $(this).attr('data-proto');
			}
		})
		
	};
	Detals.prototype.addTab = function(data) {
		var that = this;
		$('.detals-block').html('');
		$($('li[data-id=' + that.selectId + '] .detals-block')).html('<div>'+ data + '</div>')
	}
	
	Detals.prototype.showInfoModal = function(li) {
		var that = this;
		that.selectId = Number(li.attr('data-id'))
		var modal = that.addInfoModal(that.selectId)
		that.addTab(modal)
		
		
	};
	Detals.prototype.showIncomeModal = function() {
		var that = this
		var modal = that.addIncomeModal()
		that.addTab(modal)
	};
	Detals.prototype.showExpensesAddSubModal = function(data) {
		$('.expenses-tab-content').html(data)
	}
	Detals.prototype.showExpensesModal = function(liID,thatParentLi) {
		
		var that = this;
		var modal = that.addExpensesModal()
		that.addTab(modal)
		Array.from($('.expenses-tab').children()).forEach((elem, index)=>{
			elem.onclick = function(){
				var subModal = that[$(this).attr('data-proto-sub')]();
				that.addSetActiv($('.expenses-tab button'),$(this))
				that.showExpensesAddSubModal(subModal);
				that.contentHeight(thatParentLi, '.detals-wrap');
			}
		})
		$('.expenses_hsd').click()
	};
	Detals.prototype.showComplianceModal = function() {
		var that = this
		var modal = that.addComplianceModal()
		that.addTab(modal)
	};

	Detals.prototype.addInfoModal = function(liID) {
		var template = `<div class="info-modal">
							<ul>
								<li>Unique ID: ${_vehicalData[Number(liID)-1].uniqueid}</li>
								<li>Last Seen:${_vehicalData[Number(liID)-1].lastupdate}</li>
								<li>Idle Since:${get_time_diff(_vehicalData[Number(liID)-1].LastTime)}</li>
								<li>latitude:${_vehicalData[Number(liID)-1].latitude}</li>
								<li>longitude:${_vehicalData[Number(liID)-1].longitude}</li>
								<li>Direction:${_vehicalData[Number(liID)-1].course}</li>
								<li>Nearest Site:${_vehicalData[Number(liID)-1].neerestSite}</li>
								<li>Nearest Location:${_vehicalData[Number(liID)-1].neerestLoc}</li>
							</ul>
						</div>`
		return template
	};
	Detals.prototype.addIncomeModal = function() {
		var template = '<div class="income-modal">'+
							'<div class="trip-status">'+
								'<span>Trip Status</span>'+
								'<input type="radio" id="income_today" value="Today"><label for="income_today">Today</label>'+
								'<input type="radio" id="income_mount" value="Mount"><label for="income_mount">Mount</label>'+
								'<input type="radio" id="income_year" value="Year"><label for="income_year">Year</label>'+
							'</div>'+
							'<div class="select-div">'+
								'<select id="select1" >'+
									'<option>aaaaaaaa</option>'+
								'</select>'+
								'<select id="select2" >'+
									'<option>bbbbbbb</option>'+
								'</select>'+
							'</div>'+
							'<ul>'+
								'<li>Total Trips:</li>'+
								'<li>Party Name:</li>'+
								'<li>Material:</li>'+
								'<li>Quantity:</li>'+
								'<li>Freight Rate:</li>'+
							'</ul>'+
						'</div>'
		return template
		// console.log(this.income)
	};
	Detals.prototype.addExpensesHsdModal = function() {
		var template = '<div class="expenses-hsd">'+
							'<ul>'+
								'<li>Issue Qty:</li>'+
								'<li>Pump Name:</li>'+
								'<li>Rate per Ltr:</li>'+
								'<li>Amt:</li>'+
							'</ul>'+
						'</div>'
		return template
		// console.log(this.expenses)
	};
	Detals.prototype.addExpensesTyreModal = function() {
		var template = '<div class="expenses-tyre">'+
							'<table>'+
								'<thead>'+
									'<tr>'+
										'<td>Tyre No:</td>'+
										'<td>tyre Position</td>'+
										'<td>Issue Date</td>'+
										'<td>Type+</td>'+
										'<td>Rate</td>'+
									'</tr>'+
								'</thead>'+
								'<tbody>'+
									'<tr>'+
										'<td>aaa</td>'+
										'<td>333</td>'+
										'<td>eee</td>'+
										'<td>eeee</td>'+
										'<td>5</td>'+
									'</tr>'+
								'</tbody'+
							'</table>'+
						'</div>'
		return template
		// console.log(this.expenses)
	};
	Detals.prototype.addExpensesMaintainanceModal = function() {
		var template = '<div class="expenses-tyre">'+
							'<table>'+
								'<thead>'+
									'<tr>'+
										'<td>In Date:</td>'+
										'<td>Out Date:</td>'+
										'<td>Part issue</td>'+
										'<td>Cost Duration</td>'+
										'<td>Service</td>'+
										'<td>Change</td>'+
										'<td>Desc</td>'+
									'</tr>'+
								'</thead>'+
								'<tbody>'+
									'<tr>'+
										'<td>aaa</td>'+
										'<td>333</td>'+
										'<td>eee</td>'+
										'<td>eeee</td>'+
										'<td>5</td>'+
										'<td>eee</td>'+
										'<td>eeee</td>'+
										'<td>eeee</td>'+
									'</tr>'+
								'</tbody'+
							'</table>'+
						'</div>'
		return template
		// console.log(this.expenses)
	};
	Detals.prototype.addExpensesModal = function() {
		var template = '<div>'+
							'<div>'+
								'<div class="expenses-tab">'+
									'<button data-proto-sub="addExpensesHsdModal" class="expenses_hsd">HSD</button>'+
									'<button data-proto-sub="addExpensesTyreModal" class="expenses_tyre">Tyre</button>'+
									'<button data-proto-sub="addExpensesMaintainanceModal" class="expenses_maintainance">Maintainance</button>'+
								'</div>'+
							'</div>'+
							'<div class="expenses-tab-content">'+
							'</div>'+
						'</div>'
		return template
		// console.log(this.expenses)
	};
	Detals.prototype.addComplianceModal = function() {
		var template = '<div class="compliance-tab-content">'+
							'<ul>'+
								'<li>A</li>'+
								'<li>B</li>'+
								'<li>C</li>'+
								'<li>D</li>'+
								'<li>E</li>'+
								'<li>F</li>'+
							'</ul>'+
						'</div>'
		return template
		// console.log(this.compliance)
	};

	Detals.prototype.addScrol = function() {
		// $('.car-list').append('<div class="tool-menu-bar-scrol tool-menu-bar-scrol-'+one[i].id+'">'+
		// 							'<div class="tool-menu-bar-scrol-button tool-menu-bar-scrol-button-'+one[i].id+'">'+
		// 							'</div>'+
		// 						'</div>')

	};
	Detals.prototype.contentHeight = function(thatLI, content) {
		let _contentHeight = 0;
		Array.from($(thatLI).find(content).children()).forEach(elem=>{
			_contentHeight += elem.getBoundingClientRect().height;
		})
		$(thatLI).find(content).height(_contentHeight+10+"px");
	};
	
	detals = new Detals('sadas', 'dsads', 'sadsad', 'sadsad', null)
	detals.addBlock('.detals');


	function get_time_diff(datetime) {
        //var datetime = typeof datetime !== 'undefined' ? datetime : "2014-01-01 01:02:03.123456";
        //console.log( "b"+ datetime);
        var arr = datetime.split(/[- :T]/), // from your example var date = "2012-11-14T06:57:36+0000";
            datetime = new Date(arr[0], arr[1] - 1, arr[2], arr[3], arr[4], 00);
        //datetime.setHours(datetime.getHours() + 5);
        //datetime.setMinutes(datetime.getMinutes() + 30);
        datetime.getTime();
        //console.log( "a" + datetime);
        //var datetime = new Date( datetime ).getTime();
        var now = new Date().getTime();
        //console.log( datetime + " " + now);
        if (datetime < now) {
            var milisec_diff = now - datetime;
        } else {
            var milisec_diff = datetime - now;
        }

        var days = Math.floor(milisec_diff / 1000 / 60 / (60 * 24));

        var date_diff = new Date(milisec_diff);
        date_diff.setHours(date_diff.getHours() - 5);
        date_diff.setMinutes(date_diff.getMinutes() - 30);

        var hrTXT, minTXT, secTXT;

        hrTXT = CorrectTime(date_diff.getHours());
        minTXT = CorrectTime(date_diff.getMinutes());
        secTXT = CorrectTime(date_diff.getSeconds());
        //return days + "d "+ date_diff.getHours() + ":" + date_diff.getMinutes() + ":" + date_diff.getSeconds();
        return days + "d " + hrTXT + ":" + minTXT + ":" + secTXT;
    }
    function CorrectTime(myTime) {
        if (myTime < 10)
            myTime = "0" + myTime;
        return myTime;
    }
    function IdleTimeColor(datetime) {
	// console.log('datetime, speed', datetime, speed)
        var arr = datetime.split(/[- :T]/), // from your example var date = "2012-11-14T06:57:36+0000";
        datetime = new Date(arr[0], arr[1] - 1, arr[2], arr[3], arr[4], 00);
        datetime.setHours(datetime.getHours() + 5);
        datetime.setMinutes(datetime.getMinutes() + 30);
        // datetime.getTime();
        //console.log( "a" + datetime);
        var datetime = new Date( datetime ).getTime();
        var now = new Date().getTime();


        // console.log( datetime + " " + now);

        if (datetime < now) {
            var milisec_diff = now - datetime;
        } else {
            var milisec_diff = datetime - now;
        }

        var days = Math.floor(milisec_diff / 1000 / 60 / (60 * 24));
        // console.log('milisec_diff', milisec_diff)
        var date_diff = new Date(milisec_diff);
        date_diff.setHours(date_diff.getHours() - 5);
        date_diff.setMinutes(date_diff.getMinutes() - 30);



        var controlIdle = false;


        if (date_diff.getHours() < 1) {
        	// console.log('idle')
            if (date_diff.getMinutes() < 10) {
                controlIdle = true;
            }
            if (date_diff.getMinutes() >= 10) {
                controlIdle = true;
            }

        }
        return controlIdle;
    }

})


