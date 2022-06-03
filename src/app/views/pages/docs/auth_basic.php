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
            Basic
        </span>
    </div>
</div>
<div class="mt-5 mb-5 px-5">
	<h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">
		Basic Auth Actions
	</h2>
	<hr />
	<div class="mb-5">
		<h3 class="text-xl font-bold text-gray-800 mb-5 mt-5">
			Table Of Contents
		</h3>
		<ul class="list-decimal ml-10">
			<li><a class="text-gray-500 hover:underline" href="#login">Login</a></li>
			<li><a class="text-gray-500 hover:underline" href="#register">Register</a></li>
			<li><a class="text-gray-500 hover:underline" href="#logout">Logout</a></li>
		</ul>
	</div>
	<hr />
	<br />
	<div>
		<h3 id="login" class="text-xl font-bold text-gray-800 mb-5">
			Login
		</h3>
		<p>
			The login is created by a POST action which passes the user's email and password (plus an optional "remember me" field)
			to the "login" function. 
			An example can be seen below:
		</p>
		<code>
			&lt;?php <br />
			&nbsp; class Controller_Auth extends Controller_Ice{<br />
			&nbsp; &nbsp; public function action_login(){<br />
			&nbsp; &nbsp; &nbsp; $email = Input::post('field-email');<br />
			&nbsp; &nbsp; &nbsp; $password = Input::post('field-password');<br />
			&nbsp; &nbsp; &nbsp; $remember = Input::post('field-remember');<br />
			&nbsp; &nbsp; &nbsp; $rememberDuration = null;<br />
			&nbsp; &nbsp; &nbsp; if($remember === "1"){<br />
			&nbsp; &nbsp; &nbsp; &nbsp; $rememberDuration = (int) (60 * 60 * 24 * 365.25);<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; try {<br />
		    &nbsp; &nbsp; &nbsp; &nbsp; $this->layout->auth->login($email, $password, $rememberDuration);<br />
			&nbsp; &nbsp; &nbsp; &nbsp; Response::redirect('/');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\InvalidEmailException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; Response::redirect('login/failed');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\InvalidPasswordException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; Response::redirect('login/failed');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\EmailNotVerifiedException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; Response::redirect('/');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\TooManyRequestsException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; Response::redirect('/');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; }<br />
			&nbsp; }
		</code>
	</div>
	<div class="mt-5">
		<h3 id="register" class="text-xl font-bold text-gray-800 mb-5">
			Register
		</h3>
		<p>
			The register is created by a POST action which passes the user's email, password, and email fields
			to the "registerWithUniqueUsername" function. 
			An example can be seen below:
		</p>
		<code>
			&lt;?php <br />
			&nbsp; class Controller_Auth extends Controller_Ice{<br />
			&nbsp; &nbsp; public function action_register(){<br />
			&nbsp; &nbsp; &nbsp; $email = Input::post('field-email');<br />
			&nbsp; &nbsp; &nbsp; $username = Input::post('field-username');<br />
			&nbsp; &nbsp; &nbsp; $password = Input::post('field-password');<br />
			&nbsp; &nbsp; &nbsp; $password_repeat = Input::post('field-password-repeat');<br />
			&nbsp; &nbsp; &nbsp; try {<br />
		    &nbsp; &nbsp; &nbsp; &nbsp; $userId = $this->layout->auth->registerWithUniqueUsername($email, $password, $username, null);<br />
			&nbsp; &nbsp; &nbsp; &nbsp; Response::redirect('register');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\InvalidEmailException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; Response::redirect('register');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\InvalidPasswordException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; Response::redirect('register');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\DuplicateUsernameException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; Response::redirect('register');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\UserAlreadyExistsException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; Response::redirect('login');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\TooManyRequestsException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; Response::redirect('/');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; }<br />
			&nbsp; }
		</code>
	</div>
	<div class="mt-5">
		<h3 id="logout" class="text-xl font-bold text-gray-800 mb-5">
			Logout
		</h3>
		<p>
			Components can be loaded anywhere, but are best injected through the controller or layout.
			To load a component, use the following:
		</p>
		<code>
			&lt;?php<br />
			&nbsp; class Controller_Auth extends Controller_Ice {<br />
			&nbsp;&nbsp; public function action_logout(){<br />
			&nbsp;&nbsp;&nbsp;$this->layout->page = 0;<br />
			&nbsp;&nbsp;&nbsp;$this->layout->title = "";<br />
			&nbsp;&nbsp;&nbsp;$this->layout->content = '';<br />
			&nbsp;&nbsp;&nbsp;try {<br />
			&nbsp;&nbsp;&nbsp;&nbsp;$this->layout->auth->logOutEverywhere();<br />
			&nbsp;&nbsp;&nbsp;&nbsp;Response::redirect('/');<br />
			&nbsp;&nbsp;&nbsp;}<br />
			&nbsp;&nbsp;&nbsp;catch (\Delight\Auth\NotLoggedInException $e) {<br />
			&nbsp;&nbsp;&nbsp;&nbsp;Response::redirect('login');<br />
			&nbsp;&nbsp;&nbsp;}<br />
			&nbsp;&nbsp;&nbsp;Response::redirect('/');<br />
			&nbsp;&nbsp;}<br />
			&nbsp;}<br />
		</code>
	</div>
</div>