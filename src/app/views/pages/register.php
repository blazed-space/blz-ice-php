<!--
	@ Source https://tailwindcomponents.com/component/form-register
-->
<style>
  input:checked + svg {
  	display: block;
  }
</style>
<div class="h-screen bg-gradient-to-br from-blue-700 to-blue-600 flex justify-center items-center w-full">
  <form>
  	<div class="mb-3 pl-5">
  		<a href="<?php echo Uri::base(); ?>" class="text-white hover:underline">&lt; Go Back</a>
  	</div>
    <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-md max-w-sm">
      <div class="space-y-4">
        <h1 class="text-center text-2xl font-semibold text-gray-600">
        	Register
        	</h1>
        <div>
          <label for="field-username" class="block mb-1 text-gray-600 font-semibold">Username</label>
          <input type="text" id="field-username" name="field-username" class="bg-indigo-50 hover:bg-indigo-100 focus:bg-indigo-200 px-4 py-2 outline-none rounded-md w-full" required />
        </div>
        <div>
          <label for="field-email" class="block mb-1 text-gray-600 font-semibold">Email</label>
          <input type="email" id="field-email" name="field-email" class="bg-indigo-50 hover:bg-indigo-100 focus:bg-indigo-200 px-4 py-2 outline-none rounded-md w-full" required />
        </div>
        <div>
          <label for="field-password" class="block mb-1 text-gray-600 font-semibold">Password</label>
          <input type="password" id="field-password" name="field-password" class="bg-indigo-50 hover:bg-indigo-100 focus:bg-indigo-200 px-4 py-2 outline-none rounded-md w-full" required />
        </div>
        <div>
          <label for="field-password-repeat" class="block mb-1 text-gray-600 font-semibold">Repeat Password</label>
          <input type="password" id="field-password-repeat" name="field-password-repeat" class="bg-indigo-50 hover:bg-indigo-100 focus:bg-indigo-200 px-4 py-2 outline-none rounded-md w-full" required />
        </div>
        <div class="text-sm">
        	<label for="legal" class="flex justify-start mt-3 mb-3 group">
                <div class="bg-white border-2 rounded border-gray-400 w-5 h-5 flex flex-shrink-0 justify-center items-center mr-2 group-hover:border-blue-500 focus-within:bg-gray-100">
    				<input type="checkbox" id="legal" name="legal" value="1" class="opacity-0 absolute" required>
    				<svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
				</div>
                <span class="ml-1 text-gray-700 font-bold">I agree to the <a target="terms" class="text-blue-800 hover:underline" href="https://blazed.sbs/assets/pdf/tos.pdf">Terms</a> and <a class="text-blue-800 hover:underline" target="privacy" href="https://www.blazedlabs.com/privacy/">Privacy Policy</a></span>
            </label>
        </div>
      </div>
      <input type="submit" value="Register" class="mt-4 w-full bg-gradient-to-tr from-blue-600 to-indigo-600 hover:from-indigo-800 text-indigo-100 hover:text-white py-2 rounded-md text-lg tracking-wide">
    </div>
  </form>
</div>