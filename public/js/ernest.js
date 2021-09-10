	jQuery('.activateUser').on('click', function(e){
		e.preventDefault();
			var _token = $('meta[name="csrf-token"]').attr('content');
			var accountVerified = 1;
			var ID = $(this).val();
			var _url = '/admin/user/activate';
			
			//alert("Checked");
			/** Swal.fire("Operation Success!", `${ID}`, "success").then((result) => {
				if (result.isConfirmed) {
					location.reload();
				}
			});
			console.log("ID" + ID);*/
			
			$.ajaxSetup({
				headers:{
					'X-CSRF-TOKEN': _token
				}
			});
			
			$.ajax({
				url: _url,
				type: "POST",
				data:{
					account_verified: accountVerified,
					id: ID,
			},
			success: function(data){
			Swal.fire("Operation Success!", "User account has been successfully activated ", "success").then((result) => {
				if (result.isConfirmed) {
					location.reload();
				}
			});
			},
			error: function(response){
				Swal.fire(
                "Error activating user's account!",
                `${response.statusText}`,
                "error");
			}
				
		});
	});
	
	
	jQuery('.deactivateUser').on('click', function(e){
		e.preventDefault();
			var _token = $('meta[name="csrf-token"]').attr('content');
			var accountVerified = 0;
			var ID = $(this).val();
			var _url = '/admin/user/deactivate';
			
			//alert("Checked");
			/** Swal.fire("Operation Success!", `${ID}`, "success").then((result) => {
				if (result.isConfirmed) {
					location.reload();
				}
			});
			console.log("ID" + ID);*/
			
			$.ajaxSetup({
				headers:{
					'X-CSRF-TOKEN': _token
				}
			});
			
			$.ajax({
				url: _url,
				type: "POST",
				data:{
					account_verified: accountVerified,
					id: ID,
			},
			success: function(data){
			Swal.fire("Operation Success!", "User account has been successfully de-activated ", "success").then((result) => {
				if (result.isConfirmed) {
					location.reload();
				}
			});
			},
			error: function(response){
				Swal.fire(
                "Error deactivating user's account!",
                `${response.statusText}`,
                "error");
			}
				
		});
	});
	
	jQuery('.deleteUser').on('click', function(e){
		e.preventDefault();
			var _token = $('meta[name="csrf-token"]').attr('content');
			var ID = $(this).val();
			var _url = '/admin/user/delete';
			
			//alert("Checked");
			/** Swal.fire("Operation Success!", `${ID}`, "success").then((result) => {
				if (result.isConfirmed) {
					location.reload();
				}
			});
			console.log("ID" + ID);*/
			
			$.ajaxSetup({
				headers:{
					'X-CSRF-TOKEN': _token
				}
			});
			
			$.ajax({
				url: _url,
				type: "DELETE",
				data:{
					id: ID,
			},
			success: function(data){
			Swal.fire("Operation Success!", "User account has been successfully deleted ", "success").then((result) => {
				if (result.isConfirmed) {
					location.reload();
				}
			});
			},
			error: function(response){
				Swal.fire(
                "Error deleting user!",
                `${response.statusText}`,
                "error");
			}
				
		});
	});