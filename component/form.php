<div class="form p-4 rounded-lg bg-white w-[50%] mx-auto">
    <h1 class="text-center text-4xl my-4">Form</h1>

    <form action="http://localhost/helloPHP/PHPlab04/index.php" method="POST">
        <div class="flex space-x-3">
            <div class="mb-6 flex-1">
                <label for="Firtname-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                <input name="firstname_form" value="<?php echo $firstname_form; ?>" type="text" id="Firtname-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <span class="text-red-600 text-base" > <?php echo $err1 ?> </span>
            </div>
            <div class="mb-6 flex-1">
                <label for="latname-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                <input name="lastname_form" value="<?php echo $lastname_form; ?>" type="text" id="latname-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <span class="text-red-600 text-base" > <?php echo $err2 ?> </span>
            </div>
        </div>

        <div class="mb-6">
            <label for="Email-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input name="email_form" value="<?php echo $email_form; ?>" type="email" id="Email-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <span class="text-red-600 text-base" > <?php echo $err3 ?> </span>
        </div>

        <div class="mb-6">
            <label for="reEmail-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Re email</label>
            <input name="freEmail_form" value="<?php echo $freEmail_form; ?>" type="email" id="reEmail-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <span class="text-red-600 text-base" > <?php echo $err4 ?> </span>
        </div>

        <div>
            <label for="password-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input name="password_form" value="<?php echo $password_form; ?>" type="password" id="password-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <span class="text-red-600 text-base" > <?php echo $err5 ?> </span>
        </div>

        <div>
            <label for="Birthday-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birth Day</label>
            <input name="birthday_form" value="<?php echo $birthday_form; ?>" type="date" id="Birthday-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <span class="text-red-600 text-base" > <?php echo $err6 ?> </span>
        </div>

        <div class="my-4 " >
            <div class="flex flex-row space-x-3">
                <input type="radio" name="gender_form" hidden  value="" checked>
                <div class="flex item-center">
                    <input type="radio" name="gender_form" id="genderMale" value="male" <?php echo $gender_form == "male" ? "checked" : "" ?> >
                    <label for="genderMale" class="text-gray-700">Male</label>
                </div>
                <div class="flex item-center">
                    <input type="radio" name="gender_form" id="genderFemale" value="female" <?php echo $gender_form == "female" ? "checked" : "" ?>>
                    <label for="genderFemale" class="text-gray-700">Female</label>
                </div>
            </div>
            <span class="text-red-600 text-base" > <?php echo $err7 ?> </span>
        </div>

        <div>
            <input type="submit" name="order_form" value="ADD" class="p-2 rounded-lg bg-[#03C988] text-white cursor-pointer">
        </div>
    </form>

</div>