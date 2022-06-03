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
            Pages
        </span>
    </div>
</div>
<div class="mt-5 mb-5 px-5">
	<h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">
		Creating Pages
	</h2>
	<hr />
	<div class="mb-5">
		<h3 class="text-xl font-bold text-gray-800 mb-5 mt-5">
			Table Of Contents
		</h3>
		<ul class="list-decimal ml-10">
			<li><a class="text-gray-500 hover:underline" href="#about">What are Pages?</a></li>
			<li><a class="text-gray-500 hover:underline" href="#creating">Creating Pages</a></li>
			<li><a class="text-gray-500 hover:underline" href="#using">Using Pages</a></li>
		</ul>
	</div>
	<hr />
	<br />
	<div>
		<h3 id="about" class="text-xl font-bold text-gray-800 mb-5">
			What are Pages?
		</h3>
		<p>
			Pages are special view files which are located in the /src/views/pages directory and 
			are intented to be delivered to the client by actions. All GET actions automatically deliver
			a page within the "content" component to the configured layout for that action.
		</p>
	</div>
	<br />
	<div>
		<h3 id="creating" class="text-xl font-bold text-gray-800 mb-5">
			Creating a Page
		</h3>
		<p>
			To create a new page, create a new file in /src/app/views/pages.
			The file name (minus the ".php" extension) will be the page's identifier.
			Add the following to your newly created page:
		</p>
		<code>
			Hello World!<br />
			&lt;?php <br />
			&nbsp; echo "PHP Test"; <br />
			?&gt;
		</code>
		<p class="italic">
			The above example assumes:
		</p>
		<ul class="list-disc ml-5">
			<li>A controller exists which references the newly created page's identifier.</li>
			<li>A route exists which maps to the action and namespace of the controller.</li>
		</ul>
	</div>
	<div class="mt-5">
		<h3 id="using" class="text-xl font-bold text-gray-800 mb-5">
			Using Pages
		</h3>
		<p>
			Pages are loaded by a controller's action(s).
			To create a controller, please reference: <a class="text-gray-500 hover:underline" href="<?php echo Uri::base(); ?>docs/controllers#creating">Creating Controllers</a>
		</p>
	</div>
</div>