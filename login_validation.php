
<script language="JavaScript">	
	
	
	
		function fun_type_user( radio) {
		
			if (radio == 1) {
			document.getElementById('div_business').style.visible = false;
		    document.getElementById('div_business').style.display='none';				
			} 
			else{
					document.getElementById('div_business').style.visible = true;
				    document.getElementById('div_business').style.display='inline';								
				};
		}






//--------------

			/*Function for validate email*/
			function isEmail(email) {
			    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			    return regex.test(email);
			}
			 
			function isPhone(phone) {
			    if(phone.length ==10)
			    {
			        if (phone.match(/^\d{10}/)) {
			            return true;
			        }
			        else
			        {
			            return false;
			        }
			    }
			    else
			    {
			        return false;
			    }
			}


//---------------------



		
		//$("#submit").click(function(){

	function fun_create_user() {
			
	    var user = $('#user').val();
	    var first_name = $('#first_name').val();
	    var last_name = $('#last_name').val();
	    var birth_date = $('#birth_date').val();

	    var email = $('#email').val();
	    var pass = $('#pass').val();
	    var confirm_pass = $('#confirm_pass').val();
	    var phone = $('#phone').val();
	    
	    //Address
	    var street_address = $('#street_address').val();
	    var complement_address = $('#complement_address').val();
	    var country = $('#country').val();
	    var state = $('#state').val();	    
	    var city = $('#city').val();
	    var zip = $('#zip').val();	    	    
	    var type_user = $("input:radio[name='inlineRadioOptions']:checked").val();
	    var service_type = $('#service_type').val();
	    var business_name = $('#business_name').val();	    	    
	    	      
	    var html = "";
	    var email_validate = "";
	    var phone_validate = "";
//	    var action = $("#action").val();
	    var valid = true;
		    


	
	// Validation all fields
		var inputs = document.getElementsByTagName('input');
		for (var i = 0; i < inputs.length; i += 1) {
			var str_error = ".";
			 str_error = str_error.concat(inputs[i].name);
			 str_error = str_error.concat("_error");
			 if(inputs[i].value == '' || inputs[i] == null ) {		 	
			 	valid = false;
		        $(str_error).html("* This field is required.");
		   }
		   else {
		   	$(str_error).html("");
		   }
		}
	
		// Select Option
		if(country == "" || country == "Select Country" || country == null)
	    {
	        valid = false;
	        $(".country_error").html("* This field is required.");
	    }
	    else
	    {
	        $(".country_error").html("");    
	    }
	    
		if(state == "" || state == "Select State" || state == null)
	    {
	        valid = false;
	        $(".state_error").html("* This field is required.");
	    }
	    else
	    {
	        $(".state_error").html("");    
	    }
	    



	    // if Business User
	    if (type_user == 2) {
			if(service_type.value == "" || service_type == null)
		    {
		        valid = false;
		        $(".service_type_error").html("* This field is required.");
		    }
		    else
		    {
		        $(".service_type_error").html("");    
		    }	
		        	
			if(business_name.value == "" || business_name == null)
		    {
		        valid = false;
		        $(".business_name_error").html("* This field is required.");
		    }
		    else
		    {
		        $(".business_name_error").html("");    
		    }	    		    	
	    }
	    

 	    if(email != "" && email != null)
	    {
	        email_validate = isEmail(email);
	        if(!email_validate)
	        {
	            valid = false;
	            $(".email_error").html("* Invalid email format. Please try like this <b>test@example.com</b>");
	        }
	        else
	        {
	            $(".email_error").html("");
	        }
	    }
	    

		//Password
	 	if(confirm_pass != "" && confirm_pass != pass)
	    {
	        valid = false;
	        $(".confirm_pass_error").html("Confirm Password and Password are different.");
	    }
		
	    
	    if(  phone != "" && phone != null)
	    {   
	        valid = false;
	        $(".phone_error").html("* This field is required.");
	    }   
	    else
	    {
	        phone_validate = isPhone(phone);
	        if(!phone_validate)
	        {
	            valid = false;
	            $(".phone_error").html("* Phone number must be numaric and have 10 digit. E.g. 0123456789");
	        }
	        else
	        {
	            $(".phone_error").html("");
	        }
	    }	 



	   // -------------- If validation is true; --------------
	    if(valid == true)
	    {
	    	
		        var form_data = {
		            user : user,
		            first_name : first_name,
		            last_name : last_name,
		            birth_date : birth_date,
		            email : email,
		            pass : pass,
		            phone : phone,
		            street_address: street_address,
		            complement_address: complement_address,
		            country: country,
		            state: state,
		            city: city,
		            zip: zip,
		            type_user: type_user,
		            service_type: service_type,
		            business_name: business_name
		        };
		        	    	
		        			
		         
		       $.ajax({
		            url : "insert.php",
		            type : "POST",
		            data : form_data,
		            dataType : "json",
		            success: function(response){
		                if(response['valid']==false)
		                {
		                    alert(response['msg']);
		                   // window.open("login.php");

		                }
		                else
		                {
		                	alert(response['msg']);
		                	document.location = "login.php";
		                	//alert(response['User create!']);
		               		//window.open("index.php");
		                  }
		                }	           
		        }); 
		    };		
		}

	//);
		
		
</script>