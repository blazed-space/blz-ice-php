<div class="hidden lg:block bg-gray-200 dark:bg-gray-800">
    <div class="container flex items-center px-6 py-4 mx-auto overflow-y-auto whitespace-nowrap">
        <a href="<?php echo Uri::base(); ?>" class="text-gray-600 dark:text-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
        </a>

        <span class="mx-5 text-gray-500 dark:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
        </span>

        <a href="<?php echo Uri::base(); ?>docs/" class="text-gray-600 dark:text-gray-200 hover:underline">
            Documentation
        </a>

        <span class="mx-5 text-gray-500 dark:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
        </span>

        <a href="<?php echo Uri::base(); ?>docs/general/" class="text-gray-600 dark:text-gray-200 hover:underline">
            General
        </a>

        <span class="mx-5 text-gray-500 dark:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
        </span>

        <span class="text-blue-600 dark:text-blue-400 cursor-pointer">
            Configuration
        </span>
    </div>
</div>
<div class="mt-5 mb-5 px-5">
	<h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">
		Configure Ice
	</h2>
	<hr />
	<div class="mb-5">
		<h3 class="text-xl font-bold text-gray-800 mb-5 mt-5">
			Table Of Contents
		</h3>
		<ul class="list-decimal ml-10">
			<li><a class="text-gray-500 hover:underline" href="#base">Base Config</a></li>
			<li><a class="text-gray-500 hover:underline" href="#db">Database Config</a></li>
			<li><a class="text-gray-500 hover:underline" href="#routes">Routes Config</a></li>
		</ul>
	</div>
	<hr />
	<br />
	<div>
		<h3 id="base" class="text-xl font-bold text-gray-800 mb-5">
			Base Configuration
		</h3>
		<p>
			To configure Ice, first edit for development and production environment /src/app/config/development/config.php
			and /src/app/config/production/config.php
		</p>
		<code>
			&lt;?php <br />
			<br />
			return array( <br />
			&nbsp; 'base_url' => '[ENTER BASE URL]', <br />
				<br />
			&nbsp; 'security' => array( <br />
			&nbsp;&nbsp; 'token_salt' => base64_encode(random_bytes(30)), <br />
			&nbsp; ),<br />
			);<br />
		</code>
		<ul>
			<li>"base_url" must be followed by a forward slash "/".</li>
			<li>"token_salt" can either be generated on-the-fly or statically set.</li>
		</ul>
	</div>
	<br />
	<div>
		<h3 id="db" class="text-xl font-bold text-gray-800 mb-5">
			Configure Database
		</h3>
		<p>
			Database can be configured as-per environment, and is only required if database connection is needed.
		</p>
		<code>
		&lt;?php <br />
		&nbsp;return array(<br />
		&nbsp; 'default' => array( <br />
		&nbsp; &nbsp; 'type' => 'mysql', <br />
		&nbsp;&nbsp;&nbsp; 'connection' => array( <br />
		&nbsp;&nbsp;&nbsp;&nbsp; 'dsn' => 'mysql:dbname=[DB_NAME];host=[HOSTNAME];charset=utf8mb4', <br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'hostname' => '[HOSTNAME]', <br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'port' => '[DB_PORT]', <br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'database' => '[DB_NAME]', <br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'username' => '[DB_USERNAME]', <br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'password' => '[DB_PASSWORD]' <br />
		&nbsp;&nbsp;&nbsp;&nbsp;) <br />
	    &nbsp;) <br />
		</code>
	</div>
	<div class="mt-5">
		<h3 id="routes" class="text-xl font-bold text-gray-800 mb-5">
			Configure Routes
		</h3>
		<p>
			Routes connect controller actions to URI end points. Routes also allow for 
			wildcard variables to be accessed through actions. To create routes, edit 
			/src/app/config/routes.php:
		</p>
		<code>
		&lt;?php <br />
		&nbsp;return array( <br />
		&nbsp;&nbsp;'_root_' => 'main/index', <br />
		&nbsp;&nbsp;'about' => 'main/about', <br />
		&nbsp;&nbsp;'_404_' => 'main/unknown' <br />
		&nbsp;); <br />
		</code>
		<p class="italic">
			The above assumes that:
		</p>
		<ul class="list-decimal ml-5">
			<li>A controller is present called "Controller_Main".</li>
			<li>The following actions are present (in "Controller_Main"):
				<ol class="list-disc ml-10">
					<li>action_index</li>
					<li>action_about</li>
					<li>action_unknown</li>
				</ol>
			</li>
		</ul>
		<p class="mt-5">
			Thus, the above will create routes for the following URI's:
		</p>
		<ul class="list-disc ml-5">
			<li><a class="text-gray-500 hover:underline" href="<?php echo Uri::base(); ?>"><?php echo Uri::base(); ?></a></li>
			<li><a class="text-gray-500 hover:underline" href="<?php echo Uri::base(); ?>about/"><?php echo Uri::base(); ?>about/</a></li>
			<li>All 404 errors will be handled by the "unknown" action. <a class="text-gray-500 hover:underline" href="<?php echo Uri::base(); ?>404">Example</a></li>
		</ul>
	</div>
</div>