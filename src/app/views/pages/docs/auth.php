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

        <span class="text-blue-600 dark:text-blue-400 cursor-pointer">
            Auth
        </span>
    </div>
</div>
<div class="mt-5 mb-5 px-5">
	<h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">
		Authenticatiom Documentation
	</h2>
	<hr />
	<div class="mb-5">
		<h3 class="text-xl font-bold text-gray-800 mb-5 mt-5">
			Table Of Contents
		</h3>
		<ul class="list-decimal ml-10">
			<li><a class="text-gray-500 hover:underline" href="<?php echo Uri::base(); ?>docs/auth_basic/">Register, Login, and Logout</a></li>
			<li><a class="text-gray-500 hover:underline" href="<?php echo Uri::base(); ?>docs/auth_userdata/">Get User Data And Login State</a></li>
			<li><a class="text-gray-500 hover:underline" href="<?php echo Uri::base(); ?>docs/auth_mfa/">Confirm Email and Forgot Password</a></li>
			<li><a class="text-gray-500 hover:underline" href="<?php echo Uri::base(); ?>docs/auth_groups/">Group Membership And/Or User Roles</a></li>
		</ul>
	</div>
	<hr />
	<br />
	<div>
		<h3 id="about" class="text-xl font-bold text-gray-800 mb-5">
			Overview
		</h3>
		<p>
			The auth library is provided by <a class="text-gray-500 hover:underline" href="https://github.com/delight-im/PHP-Auth">Delight/Im-Auth</a>.
			Basic authentication is available out-of-the box, a simple <a class="text-gray-500 hover:underline" href="https://github.com/delight-im/PHP-Auth/blob/master/Database/MySQL.sql">SQL command</a> 
			sets up the essential tables for the authentication. By default, the auth object is created and supplied to the "layout" object by the Ice controller.
		</p>
	</div>
</div>