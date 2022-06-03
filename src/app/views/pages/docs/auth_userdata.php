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

        <a href="<?php echo Uri::base(); ?>docs/auth/" class="text-gray-600 dark:text-gray-200 hover:underline">
            Auth
        </a>

        <span class="mx-5 text-gray-500 dark:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
        </span>

        <span class="text-blue-600 dark:text-blue-400 cursor-pointer">
            User Data
        </span>
    </div>
</div>
<div class="mt-5 mb-5 px-5">
	<h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">
		Get User Data And Login State
	</h2>
	<hr />
	<div class="mb-5">
		<h3 class="text-xl font-bold text-gray-800 mb-5 mt-5">
			Table Of Contents
		</h3>
		<ul class="list-decimal ml-10">
			<li><a class="text-gray-500 hover:underline" href="#state">Login State</a></li>
			<li><a class="text-gray-500 hover:underline" href="#data">User Data</a></li>
		</ul>
	</div>
	<hr />
	<br />
	<div>
		<h3 id="state" class="text-xl font-bold text-gray-800 mb-5">
			Login State
		</h3>
		<p>
			An example can be seen below:
		</p>
		<code>
			&lt;?php <br />
			&nbsp; class Controller_Auth extends Controller_Ice{<br />
			&nbsp; &nbsp; public function action_checklogged(){<br />
			&nbsp; &nbsp; &nbsp; if ($this->layout->auth->isLoggedIn()) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo 'User is signed in';<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; else {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo 'User is not signed in yet';<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; }<br />
			&nbsp; }
		</code>
	</div>
	<div class="mt-5">
		<h3 id="data" class="text-xl font-bold text-gray-800 mb-5">
			User Data
		</h3>
		<p>
			An example can be seen below:
		</p>
		<code>
			&lt;?php <br />
			&nbsp; class Controller_Auth extends Controller_Ice{<br />
			&nbsp; &nbsp; public function action_register(){<br />
			&nbsp; &nbsp; &nbsp; if ($this->layout->auth->isLoggedIn()) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; // User ID <br />
			&nbsp; &nbsp; &nbsp; &nbsp; $id = $auth->getUserId(); <br />
			&nbsp; &nbsp; &nbsp; &nbsp; // User Email <br />
			&nbsp; &nbsp; &nbsp; &nbsp; $email = $auth->getEmail(); <br />
			&nbsp; &nbsp; &nbsp; &nbsp; // Username <br />
			&nbsp; &nbsp; &nbsp; &nbsp; $username = $auth->getUsername(); <br />
			&nbsp; &nbsp; &nbsp; &nbsp; // User State<br />
			&nbsp; &nbsp; &nbsp; &nbsp; if ($auth->isNormal()) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; echo 'User is in default state';<br />
			&nbsp; &nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; &nbsp; if ($auth->isArchived()) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; echo 'User has been archived';<br />
			&nbsp; &nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; &nbsp; if ($auth->isBanned()) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; echo 'User has been banned';<br />
			&nbsp; &nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; &nbsp; if ($auth->isLocked()) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; echo 'User has been locked';<br />
			&nbsp; &nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; &nbsp; if ($auth->isPendingReview()) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; echo 'User is pending review';<br />
			&nbsp; &nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; &nbsp; if ($auth->isSuspended()) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; echo 'User has been suspended';<br />
			&nbsp; &nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; else {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo 'User is not signed in yet';<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; }<br />
			&nbsp; }
		</code>
	</div>
</div>