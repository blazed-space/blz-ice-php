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
            Groups
        </span>
    </div>
</div>
<div class="mt-5 mb-5 px-5">
	<h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">
		Group Membership And User Roles
	</h2>
	<hr />
	<div class="mb-5">
		<h3 class="text-xl font-bold text-gray-800 mb-5 mt-5">
			Table Of Contents
		</h3>
		<ul class="list-decimal ml-10">
			<li><a class="text-gray-500 hover:underline" href="#checking">Checking Roles</a></li>
			<li><a class="text-gray-500 hover:underline" href="#available">Available Roles</a></li>
		</ul>
	</div>
	<hr />
	<br />
	<div>
		<h3 id="checking" class="text-xl font-bold text-gray-800 mb-5">
			Checking Roles
		</h3>
		<p>
			Every user can have any number of roles, which you can use to implement authorization and to refine your access controls.
			Users may have no role at all (which they do by default), exactly one role, or any arbitrary combination of roles.
			An example can be seen below:
		</p>
		<code>
			&lt;?php <br />
			&nbsp; class Controller_Auth extends Controller_Ice{<br />
			&nbsp; &nbsp; public function action_check(){<br />
			&nbsp; &nbsp; &nbsp; if ($auth->hasRole(\Delight\Auth\Role::SUPER_MODERATOR)) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo 'The user is a super moderator';<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; // or<br />
			&nbsp; &nbsp; &nbsp; if ($auth->hasAnyRole(\Delight\Auth\Role::DEVELOPER, \Delight\Auth\Role::MANAGER)) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo 'The user is either a developer, or a manager, or both';<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; &nbsp; // or<br />
			&nbsp; &nbsp; &nbsp; if ($auth->hasAllRoles(\Delight\Auth\Role::DEVELOPER, \Delight\Auth\Role::MANAGER)) {<br />
			&nbsp; &nbsp; &nbsp; &nbsp; echo 'The user is both a developer and a manager';<br />
			&nbsp; &nbsp; &nbsp; }<br />
			&nbsp; &nbsp; }<br />
			&nbsp; }
		</code>
	</div>
	<div class="mt-5">
		<h3 id="available" class="text-xl font-bold text-gray-800 mb-5">
			Available Roles
		</h3>
		<p>
			Available roles can be seen below:
		</p>
		<code>
			\Delight\Auth\Role::ADMIN;<br />
			\Delight\Auth\Role::AUTHOR;<br />
			\Delight\Auth\Role::COLLABORATOR;<br />
			\Delight\Auth\Role::CONSULTANT;<br />
			\Delight\Auth\Role::CONSUMER;<br />
			\Delight\Auth\Role::CONTRIBUTOR;<br />
			\Delight\Auth\Role::COORDINATOR;<br />
			\Delight\Auth\Role::CREATOR;<br />
			\Delight\Auth\Role::DEVELOPER;<br />
			\Delight\Auth\Role::DIRECTOR;<br />
			\Delight\Auth\Role::EDITOR;<br />
			\Delight\Auth\Role::EMPLOYEE;<br />
			\Delight\Auth\Role::MAINTAINER;<br />
			\Delight\Auth\Role::MANAGER;<br />
			\Delight\Auth\Role::MODERATOR;<br />
			\Delight\Auth\Role::PUBLISHER;<br />
			\Delight\Auth\Role::REVIEWER;<br />
			\Delight\Auth\Role::SUBSCRIBER;<br />
			\Delight\Auth\Role::SUPER_ADMIN;<br />
			\Delight\Auth\Role::SUPER_EDITOR;<br />
			\Delight\Auth\Role::SUPER_MODERATOR;<br />
			\Delight\Auth\Role::TRANSLATOR;
		</code>
	</div>
</div>