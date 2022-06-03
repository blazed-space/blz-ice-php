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
            Controllers
        </span>
    </div>
</div>
<div class="mt-5 mb-5 px-5">
	<h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">
		Creating Controllers
	</h2>
	<hr />
	<div class="mb-5">
		<h3 class="text-xl font-bold text-gray-800 mb-5 mt-5">
			Table Of Contents
		</h3>
		<ul class="list-decimal ml-10">
			<li><a class="text-gray-500 hover:underline" href="#about">What are Controllers?</a></li>
			<li><a class="text-gray-500 hover:underline" href="#creating">Creating Controllers</a></li>
			<li><a class="text-gray-500 hover:underline" href="#post">Defining Post Actions</a></li>
		</ul>
	</div>
	<hr />
	<br />
	<div>
		<h3 id="about" class="text-xl font-bold text-gray-800 mb-5">
			What are Controllers?
		</h3>
		<p>
			Controllers are special namespaces which define actions.
			Actions can either be get or post handlers.
			Controller namespaces expose actions, and can be assigned routes to 
			allow them to be accessed through the browser.
		</p>
	</div>
	<br />
	<div>
		<h3 id="creating" class="text-xl font-bold text-gray-800 mb-5">
			Creating a Controller
		</h3>
		<p>
			To create a new controller, create a new file in /src/app/classes/controller.
			The file name (minus the ".php" extension) will be the controller's namespace.
			Actions can optionally accept wildcard parameters, which are delivered through 
			arguments in the associated action's method.
			Add the following to your newly created controller:
		</p>
		<code>
			&lt;?php<br />
			&nbsp; Controller_Test extends Controller_Ice { <br />
			&nbsp; &nbsp; function action_index() { <br />
			&nbsp; &nbsp; &nbsp; $this->layout->page = 1; <br />
        	&nbsp; &nbsp; &nbsp; $this->layout->title = "Home"; <br />
        	&nbsp; &nbsp; &nbsp; $this->layout->description = "HOME PAGE!! Example desc, which overrides the default desc."; <br />
        	&nbsp; &nbsp; &nbsp; $this->layout->content = 'home'; <br />
			&nbsp; &nbsp; } <br />
			&nbsp; } 
		</code>
		<p class="italic">
			The above example assumes:
		</p>
		<ul class="list-disc ml-5">
			<li>Your created controller was called "test".</li>
			<li>A route exists which maps to test/index.</li>
			<li>A view page exists called "home".</li>
		</ul>
	</div>
	<div class="mt-5">
		<h3 id="post" class="text-xl font-bold text-gray-800 mb-5">
			Defining Post Actions
		</h3>
		<p>
			Actions can also accept POST requests.
			To create a post action, use the following:
		</p>
		<code>
			&lt;?php<br />
			&nbsp; Controller_Test extends Controller_Ice { <br />
			&nbsp; &nbsp; function post_api() { <br />
			&nbsp; &nbsp; &nbsp; $this->layout->page = 0; <br />
        	&nbsp; &nbsp; &nbsp; $this->layout->title = ""; <br />
        	&nbsp; &nbsp; &nbsp; $field_test = Input::post("field_test"); <br />
			&nbsp; &nbsp; } <br />
			&nbsp; }
		</code>
		<p class="italic">
			The above example assumes:
		</p>
		<ul class="list-disc ml-5">
			<li>Your created controller was called "test".</li>
			<li>A route exists which maps to test/api.</li>
			<li>A form posts a field with name (field_test) to the aforementioned test/api route.</li>
		</ul>
	</div>
</div>