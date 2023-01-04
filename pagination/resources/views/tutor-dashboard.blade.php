<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../app.css">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <a class="mx-auto space-y-4 flex justify-center bg-gray-300 w-40 h-10 text-white mt-2 border rounded p-2 hover:bg-gray-800"  href="/addTutor" >Add Tutor</a>

    <div class="flex justify-evenly flex-wrap mx-auto space-y-4">
    @foreach ($tutors as $tutor)
    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="flex justify-end px-4 pt-4">
            <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                <span class="sr-only">Open dropdown</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
                <ul class="py-1" aria-labelledby="dropdownButton">
                <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                </li>
                </ul>
            </div>
        </div>
        <div class="flex flex-col items-center pb-10">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src={{$tutor->imgURL}} alt="Bonnie image"/>
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{$tutor->firstname}} {{$tutor->lastname}}</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">Email : {{$tutor->email}}</span>
            <div class="flex mt-4 space-x-3 md:mt-6">
                <a href="EditTutor/{{$tutor->id}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-gray-300 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit Tutor</a>
                <a href="DeleteTutor/{{$tutor->id}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-gray-300 border border-gray-300 rounded-lg hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Delete Tutor</a>
            </div>
        </div>
    </div>
    


        
    @endforeach
</div>
<div class="flex justify-center mt-10 space-x-4">
{{$tutors->links()}}
</div>
</body>
</html>