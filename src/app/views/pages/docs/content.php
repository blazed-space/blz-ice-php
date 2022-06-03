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

        <span class="text-blue-600 dark:text-blue-400 cursor-pointer">
            Content
        </span>
    </div>
</div>
<div class="mt-5 mb-5 px-5">
	<h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">
		Content Documentation
	</h2>
	<hr />
	<div class="mb-5">
		<h3 class="text-xl font-bold text-gray-800 mb-5 mt-5">
			Table Of Contents
		</h3>
		<ul class="list-decimal ml-10">
			<li><a class="text-gray-500 hover:underline" href="<?php echo Uri::base(); ?>docs/presenters/">Creating Presenters</a></li>
			<li><a class="text-gray-500 hover:underline" href="<?php echo Uri::base(); ?>docs/pages/">Creating Pages</a></li>
			<li><a class="text-gray-500 hover:underline" href="<?php echo Uri::base(); ?>docs/models/">Creating Models</a></li>
			<li><a class="text-gray-500 hover:underline" href="<?php echo Uri::base(); ?>docs/static/">Bundling Static Assets</a></li>
			<li><a class="text-gray-500 hover:underline" href="<?php echo Uri::base(); ?>docs/document/">The Document Monolith</a></li>
		</ul>
	</div>
	<hr />
	<br />
	<div>
		<h3 id="about" class="text-xl font-bold text-gray-800 mb-5">
			How is content managed?
		</h3>
		<p>
			Ice includes several mechanisms for managing content internally. Thus, in some ways, Ice is like a content management system.
			Ice also comes with an ORM (for database management), a static bundler (for bundling CSS and Javascript), and an opinionated document monolith template.
		</p>
	</div>
	<br />
	<div>
		<h3 id="cms" class="text-xl font-bold text-gray-800 mb-5">
			Make it <i>your</i> CMS
		</h3>
		<p>
			Ice is a freeform and expressive framework out of the box. Thus, it can be molded to any sort of specification
			or requirement. Need an admin panel for your clients? Ice makes it easy to build one. Need a user system, to replicate the self-service 
			functionality of a social network? Ice can help you with that, too!
		</p>
	</div>
	<br />
	<div>
		<h3 id="fast" class="text-xl font-bold text-gray-800 mb-5">
			Ice is <i>fast</i>
		</h3>
		<p>
			Ice runs on a lightweight engine, which delivers content out the cut <i>fast</i>.
			Ice comes with CSS/JS bundling and automatically minifies CSS, JS, and HTML.
			Ice also comes with autoamtic caching, which ensures users always get the content they want; <i>fast</i>.
		</p>
	</div>
</div>