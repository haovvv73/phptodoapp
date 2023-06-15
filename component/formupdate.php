<div class="fixed inset-0 bg-gray-100 z-50 top-0 bg-opacity-70 flex justify-center">

    <div class="form p-4 rounded-lg bg-white w-[50vw] my-auto">
        <h1 class="text-center text-4xl mb-4">Form Update</h1>

        <form action="http://localhost/helloPHP/PHPlab04/index.php" method="POST">
            <div class="flex space-x-3">
            <div class="mb-6 flex-1">
                    <label for="id-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID</label>
                    <input name="ID_form" value="<?php echo $upUser->get_ID(); ?>" type="text" id="id-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-6 flex-1">
                    <label for="Firtname-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                    <input name="firstname_form" value="<?php echo $upUser->get_firstName(); ?>" type="text" id="Firtname-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <span class="text-red-600 text-base"> <?php echo $errup1 ?> </span>
                </div>
                <div class="mb-6 flex-1">
                    <label for="latname-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                    <input name="lastname_form" value="<?php echo $upUser->get_lastName(); ?>" type="text" id="latname-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <span class="text-red-600 text-base"> <?php echo $errup2 ?> </span>
                </div>
            </div>

            <div class="mb-6">
                <label for="Email-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input name="email_form" value="<?php echo $upUser->get_email(); ?>" type="email" id="Email-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <span class="text-red-600 text-base"> <?php echo $errup3 ?> </span>
            </div>

            <div>
                <label for="password-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input name="password_form" value="<?php echo $upUser->get_password(); ?>" type="password" id="password-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <span class="text-red-600 text-base"> <?php echo $errup5 ?> </span>
            </div>

            <div>
                <label for="Birthday-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birth Day</label>
                <input name="birthday_form" value="<?php echo $upUser->get_birthday(); ?>" type="date" id="Birthday-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <span class="text-red-600 text-base"> <?php echo $errup6 ?> </span>
            </div>

            <div class="my-4 ">
                <div class="flex flex-row space-x-3">
                    <div class="flex item-center">
                        <input type="radio" name="gender_form" id="genderMale" value="male" <?php echo $upUser->get_gender() == false ? "checked" : "" ?>  >
                        <label for="genderMale" class="text-gray-700">Male</label>
                    </div>
                    <div class="flex item-center">
                        <input type="radio" name="gender_form" id="genderFemale" value="female" <?php echo $upUser->get_gender() == true ? "checked" : "" ?>>
                        <label for="genderFemale" class="text-gray-700">Female</label>
                    </div>
                </div>
                <span class="text-red-600 text-base"> <?php echo $errup7 ?> </span>
            </div>

            <div class="flex space-x-3" >
                <input type="submit" name="order_form" value="UPDATE" class="p-2 rounded-lg bg-[#03C988] text-white cursor-pointer">
                <input type="submit" name="order_form" value="EXIT" class="p-2 rounded-lg bg-red-500 text-white cursor-pointer">
            </div>
        </form>

    </div>
</div>