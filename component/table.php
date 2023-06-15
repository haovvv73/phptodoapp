<div class="table w-full">

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        First name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Last name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Password
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Birthday
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Gender
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list as $item) : ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo $item->get_ID() ?>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo $item->get_firstName() ?>
                        </th>
                        <td class="px-6 py-4">
                            <?php echo $item->get_lastName() ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $item->get_email() ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $item->get_password() ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $item->get_birthday() ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $item->get_gender() == false ? "male" : "female" ?>
                        </td>
                        <td class="px-6 py-4 space-x-3 flex">
                            <form action="http://localhost/helloPHP/PHPlab04/index.php" method="POST">
                                <input type="number" hidden name="id_edit" value=<?php echo $item->get_ID() ?> >
                                <button 
                                type="submit"
                                name="order_form"
                                value="EDIT"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</button>
                            </form>
                            <form action="http://localhost/helloPHP/PHPlab04/index.php" method="POST" >
                                <input type="number" hidden name="id_delete" value=<?php echo $item->get_ID() ?> >
                                <button 
                                type="submit" 
                                name="order_form"
                                value="DELETE"
                                class="font-medium text-red-600 dark:text-blue-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>