<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    <div class="container mx-auto w-2/3 py-5">
        <div class="flex justify-between py-5">
            <h1 class="text-xl font-bold">Post List</h1>

            <!-- Search -->
            <form>
                <div class="flex items-center border-b border-teal-500 pb-2">
                  <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Search..." aria-label="Full name">
                  <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="button">
                    Search
                  </button>
                </div>
            </form>

            <!-- modal -->
            <div x-data="{ 'showModal': false }">
                <!-- btn for open modal -->
                <button type="button" 
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded-md" @click="showModal = true">
                    Add New
                </button>

                <!-- create modal box -->
                <div class="overflow-auto" x-show="showModal" :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModal }">
                    <div class="bg-white w-2/3 mx-auto rounded shadow-lg py-4 text-left px-6 border" x-show="showModal" >
                        <!--Title-->
                        <div class="flex justify-between items-center pb-3">
                            <p class="text-2xl font-bold">Post Create</p>
                            <div class="cursor-pointer z-50" @click="showModal = false">
                                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                                </svg>
                            </div>
                        </div>
                        <hr>
            
                        <!-- content -->
                        <form class="px-8 pt-6 pb-8">
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                                    Title
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Enter Title">
                            </div>
                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="author">
                                    Author
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="author" type="text" placeholder="Enter Author">
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                                    Description
                                </label>
                                <textarea class="shadow appearance-none border rounded w-full py-5 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" placeholder="Enter Description"></textarea>
                            </div>
                          </form>
                        <hr>

                        <!--Footer-->
                        <div class="flex justify-end pt-3">
                            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md mx-2" @click="alert('Create Post');">Submit</button>
                            <button class="modal-close px-4 bg-gray-500 p-3 rounded-lg text-white hover:bg-gray-400" @click="showModal = false">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- table -->
        <table class="border-collapse border w-full">
            <thead>
                <tr>
                    <th class="border py-2">No</th>
                    <th class="border">Title</th>
                    <th class="border">Author</th>
                    <th class="border">Description</th>
                    <th class="border">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border py-2">No</td>
                    <td class="border">Title</td>
                    <td class="border">Author</td>
                    <td class="border">Description</td>
                    <td class="border">
                        <div class="flex px-3 justify-center">
                            <button class="bg-indigo-500 hover:bg-indigo-700 border-indigo-500 hover:border-indigo-700 text-sm border-4 text-white px-2 rounded mx-2" type="button">
                                Edit
                              </button>

                              <button class="bg-red-500 hover:bg-red-700 border-red-500 hover:border-red-700 text-sm border-4 text-white px-2 rounded" type="button">
                                Delete
                              </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
