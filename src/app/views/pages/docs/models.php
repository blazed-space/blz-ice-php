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

        <a href="<?php echo Uri::base(); ?>docs/content/" class="text-gray-600 dark:text-gray-200 hover:underline">
            Content
        </a>

        <span class="mx-5 text-gray-500 dark:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
        </span>

        <span class="text-blue-600 dark:text-blue-400 cursor-pointer">
            Models
        </span>
    </div>
</div>
<div class="mt-5 mb-5 px-5">
	<h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">
		Creating Models
	</h2>
	<hr />
	<div class="mb-5">
		<h3 class="text-xl font-bold text-gray-800 mb-5 mt-5">
			Table Of Contents
		</h3>
		<ul class="list-decimal ml-10">
			<li><a class="text-gray-500 hover:underline" href="#about">What are Models?</a></li>
			<li><a class="text-gray-500 hover:underline" href="#creating">Creating Models</a></li>
			<li><a class="text-gray-500 hover:underline" href="#using">CRUD Operations With Models</a></li>
		</ul>
	</div>
	<hr />
	<br />
	<div>
		<h3 id="about" class="text-xl font-bold text-gray-800 mb-5">
			What are Models?
		</h3>
		<p>
			Models are structured interfaces which define fields contained within tables.
			Models allow the ORM to perform CRUD operations on a configured database.
		</p>
	</div>
	<br />
	<div>
		<h3 id="creating" class="text-xl font-bold text-gray-800 mb-5">
			Creating a Model
		</h3>
		<p>
			To create a new model, create a new file in /src/app/classes/model.
			The file name (minus the ".php" extension) will be the model's name.
			The file name (and thus the model's name) should be singular, whereas the 
			associated table should be plural case.
			Add the following to your newly created model:
		</p>
		<code>
			&lt;?php <br />
			class Model_User extends Orm\Model{ <br />
			&nbsp; protected static $_properties = array('id', <br />
			&nbsp; &nbsp; 'email' => array( <br />
			&nbsp; &nbsp; &nbsp; 'data_type' => 'varchar' <br />
			&nbsp; &nbsp; ),<br />
			&nbsp; &nbsp; 'username' => array( <br />
			&nbsp; &nbsp; &nbsp; 'data_type' => 'varchar' <br />
			&nbsp; &nbsp; ) <br />
			&nbsp; ); <br />
			} <br />
		</code>
		<p class="italic">
			The above example assumes:
		</p>
		<ul class="list-disc ml-5">
			<li>A database is configured, and contains a table called `users` with the fields: 'id', 'email', and 'username'.</li>
			<li>The created model file was called 'users.php'.</li>
		</ul>
	</div>
	<div class="mt-5">
		<h3 id="using" class="text-xl font-bold text-gray-800 mb-5">
			CRUD Operations With Models
		</h3>
		<p>
			Models can be used to easily Create, Read, Update, and Delete rows on the configured database.
			An example of each is provided below:
		</p>
		<code>
			&lt;?php <br />
			&nbsp;//Create a row <br />
			&nbsp;$new_user = Model_User::forge();<br />
			&nbsp;$new_user->email = "test@example.com";<br />
			&nbsp;$new_user->username = 'example';<br />
			&nbsp;$new_user->save();<br /><br />
			&nbsp;//Read a row, by ID (ex: 2)<br />
			&nbsp;$get_user = Model_User::find(2);<br /><br />
			&nbsp;//Read a row, by field (ex: 'email'='test@example.com')<br />
			&nbsp;$get_user = Model_User::find('all', array(<br />
			&nbsp;&nbsp;'where' => array(<br />
			&nbsp;&nbsp;&nbsp;array('email', 'test@example.com')<br />
			&nbsp;&nbsp;)<br />
			&nbsp;));<br />
		</code>
		<p class="italic">
			The above example assumes:
		</p>
		<ul class="list-disc ml-5">
			<li>A model exists called "Model_User".</li>
		</ul>
	</div>
</div>