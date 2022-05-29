<?php if(isset($menu) && isset($page)): ?>

    <header>
        <nav class="flex items-center bg-gray-800 p-3 flex-wrap">
            <a href="<?php echo Uri::base(); ?>" class="p-2 mr-4 inline-flex items-center group">
                <img class="group-hover:opacity-75" src="<?php echo Layout_Site::image(); ?>" width="40" height="40" alt="<?php echo Layout_Site::motto; ?>" />
                <span class="text-xl text-white group-hover:text-gray-300 font-bold tracking-wide">
                    <?php echo Layout_Site::nav_title; ?>
                </span>
            </a>
            <button data-target="#blz-menu-mobile" class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler">
                <!-- Burger Menu -->
                <i class="material-icons">menu</i>
            </button>
            <div class="lg:hidden md:block sm:block w-full">
	            <div class="hidden top-navbar w-full" id="blz-menu-mobile">
	                <div class="block lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start  flex flex-col lg:h-auto">
	                    <?php foreach($menu as $i => $menu_item): ?>
		                    <a href="<?php echo $menu_item['url']; ?>" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white<?php if($page === ($i+1)): ?>  underline <?php endif; ?>">
		                        <span>
		                            <?php echo $menu_item['label']; ?>
		                        </span>
		                    </a>
	                    <?php endforeach; ?>
	                </div>
	            </div>
            </div>
            <div class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto" id="blz-menu">
                <div class="hidden lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start  flex flex-col lg:h-auto">
                    <?php foreach($menu as $i => $menu_item): ?>
	                    <a href="<?php echo $menu_item['url']; ?>" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white<?php if($page === ($i+1)): ?>  underline <?php endif; ?>">
	                        <span>
	                            <?php echo $menu_item['label']; ?>
	                        </span>
	                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </nav>
    </header>

<?php endif; ?>