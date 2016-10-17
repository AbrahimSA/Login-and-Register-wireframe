<?php
session_start();

    include("header.php");
	?>


 <script type= "text/javascript" src = "js/countries.js"></script>
		
<body>

    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-4">                    
            <div class="panel panel-default" >
                    <div class="panel-heading">
                    	  <ul class="nav nav-pills nav-justified">
						    <li class="active"><a data-toggle="tab" href="#menuLogin">Login</a></li>
						    <li><a data-toggle="tab" href="#menuRegister">Register</a></li>
						  </ul>
                    </div>     

				 <div class="tab-content">
    					<div id="menuLogin" class="tab-pane fade in active">
			                    <div style="padding-top:30px" class="panel-body" >
			
			                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
			                            
			                        <form id="loginform" class="form-horizontal" role="form">
			                                    
			                            <div style="margin-bottom: 25px" class="input-group">
			                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">                                        
			                                    </div>
			                                
			                            <div style="margin-bottom: 25px" class="input-group">
			                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
			                                    </div>
			                                    
			
			                                
			                            <div class="input-group">
			                                      <div class="checkbox">
			                                        <label>
			                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
			                                        </label>
			                                      </div>
			                                    </div>
			
			
			                                <div style="margin-top:10px" class="form-group">
			                                    <!-- Button -->
			
			                                    <div class="col-sm-12 controls">
			                                      <a id="btn-login" href="#" class="btn btn-success">Login  </a>
			                                     
			
			                                    </div>
			                                </div>
			
			
			                                <div class="form-group">
			                                    <div class="col-md-12 control">
			                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
			
					                        <div class="navbar-collapse collapse" style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
			
			                                       <!--     Don't have an account! 
			                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
			                                            Sign Up Here
			                                    </a> -->
			                                        </div>
			                                    </div>
			                                </div>    
			                            </form>     			
			                        </div>          
			                    </div>
			                    		                    
			                    <!-- Register -->
			                    <div id="menuRegister" class="tab-pane fade">





								<div style="padding-top:30px" class="panel-body" >
									<form class="form-signin"  method="POST" role="form">
									<!--onsubmit="return false;"-->
							
										<div class="form-group"> <!-- Username field -->
											<label  for="user">Username</label>&nbsp;&nbsp;&nbsp;<span class="user_error error"></span>
											<input class="form-control" id="user" name="user" type="text"/>
										</div>
										
										<div class="form-group"> <!-- First Name field -->
											<label  for="user">First Name</label>&nbsp;&nbsp;&nbsp;<span class="first_name_error error"></span>
											<input class="form-control" id="FirstName" name="first_name" type="text"/>
										</div>
							
										<div class="form-group"> <!-- Last Name field -->
											<label  for="user">Last Name</label>&nbsp;&nbsp;&nbsp;<span class="last_name_error error"></span>
											<input class="form-control" id="last_name" name="last_name" type="text"/>
										</div>			

										<div class="form-group"> <!-- birth_date field -->
											<label  for="birth_date">Birth Date</label>&nbsp;&nbsp;&nbsp;<span class="birth_date_error error"></span>
											<input class="form-control" id="birth_date" name="birth_date" type="date"/>
										</div>			

													
										<div class="form-group"> <!-- Email field -->
											<label  for="email">Email<span class="asteriskField"></span></label>&nbsp;&nbsp;&nbsp;<span class="email_error error"></span>
											<input class="form-control"  placeholder="user@mydomain.com" id="email" name="email" type="text"/>
										</div>
										
										<div class="form-group"> <!-- Password field -->
											<label  for="pass">Password</label>&nbsp;&nbsp;&nbsp;<span class="pass_error error"></span>
											<input class="form-control" id="pass" name="pass"    type="password"/>
										</div>
										
										<div class="form-group"> <!-- Confirm Password field -->
											<label  for="pass">Confirm Password</label>&nbsp;&nbsp;&nbsp;<span class="confirm_pass_error error"></span>
											<input class="form-control" id="confirm_pass" name="confirm_pass"  type="password"/>
										</div>
										
										
										<div class="form-group" > <!-- Phone field -->
											<label  for="phone" class="control-label">Phone</label></a>&nbsp;&nbsp;&nbsp;<span class="phone_error error"></span>
											<input class="form-control" placeholder="(999) 999-9999"  id="phone" name="phone" type="text"/>
										</div>
										
							
										<div class="form-group"> <!-- Street Address -->
											<label for="street_address" class="control-label">Street Address</label>&nbsp;&nbsp;&nbsp;<span class="street_address_error error"></span>
											<input type="text" class="form-control" id="street_address" name="street_address" placeholder="Street address, P.O. box, company name, c/o">
										</div>					
														
																			
										<div class="form-group"> <!-- Complement Address -->
											<label for="complement_address" class="control-label">Complement Address</label>&nbsp;&nbsp;&nbsp;<span class="complement_address_error error"></span>
											<input type="text" class="form-control" id="complement_address" name="complement_address" placeholder="Apartment, suite, unit, building, floor, etc.">
										</div>	
							
							
										<div class="form-group"> <!-- Select Country -->
											<label for="country" class="control-label">Select Country:</label>&nbsp;&nbsp;&nbsp;<span class="country_error error"></span>
											<select id="country" class="form-control" name ="country"></select>
										</div>					
																
										<div class="form-group"> <!-- Select State -->
											<label for="state" class="control-label">Select State:</label>&nbsp;&nbsp;&nbsp;<span class="state_error error"></span>
											<select name ="state" class="form-control" id ="state"></select>
											 <script language="javascript">
											populateCountries("country", "state");
											 </script>
										</div>	
														
							
										<div class="form-group"> <!-- City-->
											<label for="city" class="control-label">City</label>&nbsp;&nbsp;&nbsp;<span class="city_error error"></span>
											<input type="text" class="form-control" id="city" name="city" placeholder="Smallville">
										</div>	
											
									
										<div class="form-group"> <!-- Zip Code-->
											<label for="zip" class="control-label">Zip Code</label>&nbsp;&nbsp;&nbsp;<span class="zip_error error"></span>
											<input type="text" class="form-control" id="zip" name="zip" placeholder="#####">
										</div>
								
								
										<div  class="form-group"> <!--  field -->	
											<label for="inlineRadioOptions" class="control-label">Type of User:</label> <br />&nbsp;&nbsp;&nbsp;<span class="inlineRadioOptions_error error"></span>
											<label  class="radio-inline control-label ">
											  <input onclick="fun_type_user(1)" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">Client  
											</label>
											<label class="radio-inline control-label">
											  <input onclick="fun_type_user(2)" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">Business  
											</label>
										</div>
										
							 
									
										<div  class="form-group"> <!--  field -->	
										
										
											<div id="div_business" hidden class="form-group"> <!--  field -->
												 <div class="form-group"> <!-- -	Business Name field -->
													<label for="service_type" class="control-label">Services:</label>&nbsp;&nbsp;&nbsp;<span class="service_type_error error"></span>
												      <select class="form-control" id="service_type">
												      	<option disabled selected required value>select an option</option>
												        <option value="1">Service</option>
												        <option value="2">Cars/ Vechicles</option>
												        <option value="3">Pets</option>
												        <option value="4">Rentals</option>
												        <option value="5">Community</option>
												        <option value="6">Jobs</option>
							
												      </select>
												</div>
										
												<div class="form-group"> <!-- -	Business Name field -->
													<label  for="user">Business Name</label>&nbsp;&nbsp;&nbsp;<span class="business_name_error error"></span>
													<input class="form-control" id="business_name" name="business_name" type="text"/>
												</div>	
											</div>
											
										</div>
										
										<br />				
											<div class="form-group">
												<!-- <button class="btn btn-primary " onclick="fun_create_user()" name="submit" id='submit' >Submit</button> -->
												
												<p class="btn btn-primary "  > <a  style="color:black" onclick="fun_create_user()">Save</a></p>
											<!--	 <button type="button" id="submit" class="btn btn-primary">Submit</button> -->
											</div>
										
									</form>							
								</div>








						    </div>
    
 	                 </div>
			                                   
                    </div>  
        </div>
        
        

    </div>
    

</body>
<br /><br /><br /><br /> <br /><br />



<?php

    include("login_validation.php");
	
    include("footer.php");
	?>
