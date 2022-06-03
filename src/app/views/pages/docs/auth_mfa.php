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
            MFA
        </span>
    </div>
</div>
<div class="mt-5 mb-5 px-5">
	<h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">
		Confirm Email and Forgot Password
	</h2>
	<hr />
	<div class="mb-5">
		<h3 class="text-xl font-bold text-gray-800 mb-5 mt-5">
			Table Of Contents
		</h3>
		<ul class="list-decimal ml-10">
			<li><a class="text-gray-500 hover:underline" href="#confirm">Confirm Email</a></li>
			<li><a class="text-gray-500 hover:underline" href="#forgot">Forgot Password</a></li>
		</ul>
	</div>
	<hr />
	<br />
	<div>
		<h3 id="confirm" class="text-xl font-bold text-gray-800 mb-5">
			Confirm Email
		</h3>
		<p>
			The email confirmation message is first sent by the "register" action. 
			You can also re-send confirmation email.
			An example can be seen below:
		</p>
		<code>
			&lt;?php <br />
			&nbsp; class Controller_Auth extends Controller_Ice{<br />
			&nbsp; &nbsp; public function action_resend(){<br />
			&nbsp; &nbsp; &nbsp; try {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; $auth->resendConfirmationForEmail($_POST['email'], function ($selector, $token) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo 'Send ' . $selector . ' and ' . $token . ' to the user (e.g. via email)';<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo '  For emails, consider using the mail(...) function, Symfony Mailer, Swiftmailer, PHPMailer, etc.';<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo '  For SMS, consider using a third-party service and a compatible SDK';<br />
			&nbsp; &nbsp; &nbsp; &nbsp; });<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo 'The user may now respond to the confirmation request (usually by clicking a link)';<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\ConfirmationRequestNotFound $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; die('No earlier request found that could be re-sent');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\TooManyRequestsException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; die('There have been too many requests -- try again later');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; }<br />
			&nbsp; }
		</code>
	</div>
	<div class="mt-5">
		<h3 id="forgot" class="text-xl font-bold text-gray-800 mb-5">
			Forgot Password
		</h3>
		<p>
			To reset password is a three step process, first the request is initiated.
			An example can be seen below:
		</p>
		<code>
			&lt;?php <br />
			&nbsp; class Controller_Auth extends Controller_Ice{<br />
			&nbsp; &nbsp; public function action_reset(){<br />
			&nbsp; &nbsp; &nbsp; try {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; $auth->forgotPassword($_POST['email'], function ($selector, $token) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo 'Send ' . $selector . ' and ' . $token . ' to the user (e.g. via email)';<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo '  For emails, consider using the mail(...) function, Symfony Mailer, Swiftmailer, PHPMailer, etc.';<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo '  For SMS, consider using a third-party service and a compatible SDK';<br />
			&nbsp; &nbsp; &nbsp; &nbsp; });<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo 'Request has been generated';<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\InvalidEmailException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; die('Invalid email address');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\EmailNotVerifiedException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; die('Email not verified');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\ResetDisabledException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; die('Password reset is disabled');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\TooManyRequestsException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; die('Too many requests');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; }<br />
			&nbsp; }
		</code>
		<p class="mt-5">
			Next, the user clicks the link and the request is verified. An example can be seen below:
		</p>
		<code>
			&lt;?php <br />
			&nbsp; class Controller_Auth extends Controller_Ice{<br />
			&nbsp; &nbsp; public function action_verify(){<br />
			&nbsp; &nbsp; &nbsp; try {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; $auth->canResetPasswordOrThrow($_GET['selector'], $_GET['token']);<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo 'Put the selector into a "hidden" field (or keep it in the URL)';<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo 'Put the token into a "hidden" field (or keep it in the URL)';<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo 'Ask the user for their new password';<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\InvalidSelectorTokenPairException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; die('Invalid token');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\TokenExpiredException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; die('Token expired');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\ResetDisabledException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; die('Password reset is disabled');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\TooManyRequestsException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; die('Too many requests');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; }<br />
			&nbsp; }
		</code>
		<p class="mt-5">
			Finally, the user actually resets their password. An example can be seen below:
		</p>
		<code>
			&lt;?php <br />
			&nbsp; class Controller_Auth extends Controller_Ice{<br />
			&nbsp; &nbsp; public function action_set(){<br />
			&nbsp; &nbsp; &nbsp; try {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; $auth->resetPassword($_POST['selector'], $_POST['token'], $_POST['password']);<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo 'Put the selector into a "hidden" field (or keep it in the URL)';<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo 'Put the token into a "hidden" field (or keep it in the URL)';<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo 'Ask the user for their new password';<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\InvalidSelectorTokenPairException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; die('Invalid token');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\TokenExpiredException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; die('Token expired');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\ResetDisabledException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; die('Password reset is disabled');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\InvalidPasswordException $e) {<br />
    		&nbsp; &nbsp; &nbsp; &nbsp; die('Invalid password');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; catch (\Delight\Auth\TooManyRequestsException $e) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; die('Too many requests');<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; }<br />
			&nbsp; }
		</code>
	</div>
</div>