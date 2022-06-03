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
            Bundling Static Assets
        </span>
    </div>
</div>
<div class="mt-5 mb-5 px-5">
	<h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">
		Bundling Static Assets
	</h2>
	<hr />
	<div class="mb-5">
		<h3 class="text-xl font-bold text-gray-800 mb-5 mt-5">
			Table Of Contents
		</h3>
		<ul class="list-decimal ml-10">
			<li><a class="text-gray-500 hover:underline" href="#about">How Are Static Assets Bundled?</a></li>
			<li><a class="text-gray-500 hover:underline" href="#css">CSS Files</a></li>
			<li><a class="text-gray-500 hover:underline" href="#js">JS Files</a></li>
		</ul>
	</div>
	<hr />
	<br />
	<div>
		<h3 id="about" class="text-xl font-bold text-gray-800 mb-5">
			How Are Static Assets Bundled?
		</h3>
		<p>
			Static asset files, such as CSS and Javascript, are automatically bundled into a cachable
			bundle file (one per-page), and automatically minified. Static assets can be added to the bundle
			chain through the document monolith.
		</p>
	</div>
	<br />
	<div>
		<h3 id="css" class="text-xl font-bold text-gray-800 mb-5">
			CSS Files
		</h3>
		<p>
			CSS Files are stored within /assets/src/css.
			To add a new CSS file, add the following to the top section of your /src/views/document.php file:
		</p>
		<code>
			&lt;link media="screen" type="text/css" href="assets/src/css/example.css">
		</code>
		<p class="italic">
			The above example assumes:
		</p>
		<ul class="list-disc ml-5">
			<li>The newly created CSS file was called "example.css".</li>
		</ul>
	</div>
	<div class="mt-5">
		<h3 id="js" class="text-xl font-bold text-gray-800 mb-5">
			JS Files
		</h3>
		<p>
			Javascript Files are stored within /assets/src/js.
			To add a new JS file, add the following to the top section of your /src/views/document.php file:
		</p>
		<code>
			&lt;script type="text/javascript" src="assets/src/example.js">&lt;/script>
		</code>
		<p class="italic">
			The above example assumes:
		</p>
		<ul class="list-disc ml-5">
			<li>The newly created JS file was called "example.js".</li>
		</ul>
	</div>
</div>