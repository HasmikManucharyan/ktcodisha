<div id="placeGraph" style="width:400px;height:300px; display:block; "> Space for Graph</div>
<script>

var dataset1 = [[37,353.8],[38,353.4],[39,353.4],[40,353.4],[41,350.4],[43,353.1],[44,353.1],[47,351.1],[48,351.1],[49,351.1],[50,351.1],[51,348.5],[52,350.4],[53,350.4],[55,350.4],[56,350.4],[57,350.4],[59,348.5],[60,348.5],[61,348.5],[62,348.5],[63,346.8],[65,346.8],[68,346.8],[69,346.8],[71,346.8],[72,346.8],[73,346.8],[74,346.8],[75,345.4],[76,345.4],[77,345.4],[78,345.4],[79,342.4],[80,342.4],[81,342.4],[82,340.4],[83,340.4],[84,340.4],[85,340.4],[87,340.4],[90,341.9],[91,339.4],[92,339.4],[93,339.4],[94,339.4],[95,339.4],[96,338.8],[97,338.8],[98,338.8],[100,339.3],[101,341.4],[102,338.8],[103,338.8],[105,338.2],[106,338.2],[107,338.2],[108,338.2],[109,338.2],[110,336.4],[111,336.4],[112,336.4],[113,336.4],[114,336.4],[116,336.5],[117,335],[118,335],[120,331.9],[121,330.3],[122,336],[124,332.7],[125,332.7],[126,332.7],[127,332.7],[128,332.7],[130,336.4],[131,336.4],[132,336.4],[133,336.4],[134,336.4],[135,339.9],[136,335.2],[137,335.2],[138,333.4],[139,338.8],[140,332.3],[141,334.3],[142,334.3],[143,334.3],[144,334.3],[145,334.3],[147,334.5],[148,336.8],[149,336.8],[150,336.8],[151,332.5],[152,335.7],[153,338],[154,339.7],[155,339.7],[156,336.6],[157,334.5],[158,334.5],[159,334.5],[160,334.5],[162,334.5],[163,334.5],[164,332.6],[165,332.6],[166,334.4],[168,336.2],[169,334.5],[171,331.2],[173,333.7],[174,333.7],[175,333.7],[176,333.7],[178,329.3],[180,329.3],[181,331.6],[182,331.6],[184,331.6],[185,328],[186,329.5],[187,329.5],[189,329.5],[190,329.5],[191,329.5],[192,329.5],[193,332.2],[194,332.2],[195,332.2],[197,329.6]];

    $.plot($("#placeGraph"), [{
			data: dataset1,
			lines: { show: true, fill: true }
		}]);
	$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
				
	
		</script>