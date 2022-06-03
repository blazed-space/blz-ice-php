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
            Presenters
        </span>
    </div>
</div>
<div class="mt-5 mb-5 px-5">
	<h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">
		Creating Presenters
	</h2>
	<hr />
	<div class="mb-5">
		<h3 class="text-xl font-bold text-gray-800 mb-5 mt-5">
			Table Of Contents
		</h3>
		<ul class="list-decimal ml-10">
			<li><a class="text-gray-500 hover:underline" href="#about">What are Presenters?</a></li>
			<li><a class="text-gray-500 hover:underline" href="#creating">Creating Presenters</a></li>
			<li><a class="text-gray-500 hover:underline" href="#using">Using Presenters</a></li>
		</ul>
	</div>
	<hr />
	<br />
	<div>
		<h3 id="about" class="text-xl font-bold text-gray-800 mb-5">
			What are Presenters?
		</h3>
		<p>
			Presenters allow for logic to be associated with views.
			Every presenter has a class file as well as a view file, which are linked
			through their names.
		</p>
	</div>
	<br />
	<div>
		<h3 id="creating" class="text-xl font-bold text-gray-800 mb-5">
			Creating a Presenter
		</h3>
		<p>
			To create a new presenter, create a new file in /src/app/classes/presenter.
			The file name (minus the ".php" extension) will be the presenter's identifier.
			The presenter must have a view file which bears the same identifier.
			Add the following to your newly created presenter:
		</p>
		<code>
			&lt;?php<br />
			&nbsp; Presenter_Test extends Presenter { <br />
			&nbsp; &nbsp; function view() { <br />
			&nbsp; &nbsp; &nbsp; $this->example = "Example Variable"; <br />
			&nbsp; &nbsp; } <br />
			&nbsp; } 
		</code>
		<p class="italic">
			The above example assumes:
		</p>
		<ul class="list-disc ml-5">
			<li>Your created presenter was called "test".</li>
			<li>Your linked view is called "test"</li>
		</ul>
		<p class="mt-5">
			Then, create a view file with the same name (test.php) in /src/app/views.
			Add the following to your newly created view:
		</p>
		<code>
			&lt;?php if(isset($example)): ?&gt; <br />
			&nbsp; &lt;?php echo $example; ?&gt; <br />
			&lt;?php endif; ?&gt;
		</code>
	</div>
	<div class="mt-5">
		<h3 id="using" class="text-xl font-bold text-gray-800 mb-5">
			Using Presenters
		</h3>
		<p>
			Presenters can be loaded just like view files.
			To use a presenter, use the following:
		</p>
		<code>
			&lt;?php<br />
			&nbsp; $p = Presenter::forge('test');<br />
			&nbsp; echo($p); <br />
			?&gt;
		</code>
	</div>
</div>