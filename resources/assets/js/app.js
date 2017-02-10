(function() {

	'use strict';

	let app = {

		init: function() {
			this.listeners();
		},

		listeners: function() {
			$('#sell').on('click', this.ajaxSell);
			$('#restock').on('click', this.ajaxRestock);
		},

		ajaxSell : function() {
			let id = $(this).data("id");

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			
			$.post("/products/sell/" + id)
			.done(app.ajaxSellDone)
			.fail(app.ajaxSellFail);
		},


		ajaxSellDone: function($response) {	
			$("#stock").html($response);
		},

		ajaxSellFail: function() {
			console.log('Sell Fail');
		},

		ajaxRestock : function() {
			let id = $(this).data("id");

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			
			$.post("/products/restock/" + id)
			.done(app.ajaxRestockDone)
			.fail(app.ajaxRestockFail);
		},


		ajaxRestockDone: function($response) {	
			$("#stock").html($response);
		},

		ajaxRestockFail: function() {
			console.log('Restock Fail');
		}
	};

	app.init();

})();
