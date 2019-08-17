<h1>unicellular</h1>
<img src="evolution.jpg">

<h1>Documentation</h1>
<p>For install just clone this repository or (download zip and extract) to root of your web server</p>
<p>Unicellular folder nad file structure</p>
<pre>
	/folder/ Controller                            -- Users controller folder
		/file/ Maincontroller.php				   -- Default site controller
	/folder/ core                                  -- The source folder, the global site logic must located here
		/folder/ pages	 						   -- Folder of standart error codes pages templates
			/file/ 404.php    					   -- 404 error page
		/file/ Controller.php                      -- Controller class which contain the main controller && action
													  logic
		/file/ Model.php                           -- Model class which contain the main bussines logic 
		/file/ router.php                          -- File which contain the routing logic
		/file/ View.php 						   -- View class contain View logic
	/folder/ etc 								   -- System seting && configuration folder
		/file/ config.php 						   -- File contain main site configuratins 
	/folder/ Model 								   -- Folder with users Models
	/folder/ vendor 							   -- folder with fontend data (css, js)
	/folder/ View 								   -- Folder with result pages and templates
		/folder/ Pages 							   -- Folder with page content blocks
		/folder/ Templates 						   -- Folder with page templates
	/file/ .htaccess 							   -- server configuration file	
	/file/ index.php 							   -- Main idex file
</pre>
<h3>First step</h3>
<p>
	<h3>Connect site to the data base by:</h3><br>
	Change /etc/config.php configuration to yours
		<pre><code>
			$db_config = [
    			'host' => '127.0.0.1',   // Your host, default localhost == 127.0.0.1
    			'user' => 'root',		 // User name
			    'password' => '',        // Password
			    'dbname' => 'mysite',	 // Database name
			    'coding' => 'utf-8'      // conding system !NOT NESSESARY!
			];
		</code></pre>	
</p>
<h3>Create symple controller and action</h3>
<p>
	To create a symple controller first create file in /Controller folder which called  Test + Controller.php
	Class must be called like first name of file in our situation Test.
	Each controller must include main controller and extends it  <code>include_once 'core/Controller.php';</code> and if you will use models just include its to
	<code>include_once 'Model/YourModel.php';</code>
	<p>Each action function response for each result page</p>
</p>
