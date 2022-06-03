
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
            Layouts
        </span>
    </div>
</div>
<div class="mt-5 mb-5 px-5">
	<h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">
		Creating Layouts
	</h2>
	<hr />
	<div class="mb-5">
		<h3 class="text-xl font-bold text-gray-800 mb-5 mt-5">
			Table Of Contents
		</h3>
		<ul class="list-decimal ml-10">
			<li><a class="text-gray-500 hover:underline" href="#about">What are layouts?</a></li>
			<li><a class="text-gray-500 hover:underline" href="#creating">Creating Layouts</a></li>
			<li><a class="text-gray-500 hover:underline" href="#using">Using Layouts</a></li>
		</ul>
	</div>
	<hr />
	<br />
	<div>
		<h3 id="about" class="text-xl font-bold text-gray-800 mb-5">
			What are layouts?
		</h3>
		<p>
			Layouts allow for the structural presentation of content and components.
			Both are injected into the monolith via the controller, and each controller action
			can define a custom layout (wheras the layout "basic.php" is the default).
		</p>
	</div>
	<br />
	<div>
		<h3 id="creating" class="text-xl font-bold text-gray-800 mb-5">
			Creating a Layout
		</h3>
		<p>
			To create a new layout, create a new file in /src/app/views/layouts.
			The file name (minus the ".php" extension) will be the layout's identifier.
			Layouts by default are supplied with the "header" and "footer" components, 
			as well as a "content" view, which is defined in the action. Therefore, to use these
			default components, simply place the following in your new layout document:
		</p>
		<code>
			&lt;?php echo $header; ?><br />
	        &lt;main> <br />
	        &nbsp; &lt;div> <br />
	        &nbsp;&nbsp; &lt;?php echo $content; ?> <br />
	        &nbsp; &lt;/div> <br />
	        &lt;/main> <br />
	        &lt;?php echo $footer; ?> <br />
		</code>
	</div>
	<div class="mt-5">
		<h3 id="using" class="text-xl font-bold text-gray-800 mb-5">
			Using a Layout
		</h3>
		<p>
			To use your newly created layout, create an action in a controller of your choice,
			and set the "page_layout" variable to refer to the identifier of your page layout (The file name; minus the ".php" extension):
		</p>
		<code>
			&lt;?php<br />
			Controller_Example extends Controller_Ice{ <br />
			&nbsp;public function action_test(){ <br />
    		&nbsp;&nbsp;$this->layout->page = 1; <br />
        	&nbsp;&nbsp;$this->layout->title = "Example/Test"; <br />
        	&nbsp;&nbsp;$this->layout->page_layout = 'example_layout'; <br />
        	&nbsp;&nbsp;$this->layout->content = 'test'; <br />
    		&nbsp; }<br />
			}
		</code>
		<p class="italic">
			The above example assumes:
		</p>
		<ul class="list-disc ml-5">
			<li>A configured route points to "example/test". <a class="text-gray-500 hover:underline" href="<?php echo Uri::base(); ?>docs/config#routes">Learn how to configure routes</a></li>
			<li>No other action exists within your application with the index of "1".</li>
		</ul>
	</div>
</div>