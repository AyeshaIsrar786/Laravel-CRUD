<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Tailwind CSS -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
<title>Update</title>
</head>
<body class="flex justify-center my-20 bg-green-500">
<div class="flex justify-left max-w-xl mx-10 my-20 p-20 bg-indigo-50 rounded-lg">
        <h1 class="border rounded-lg text-center absolute w-100 py-2 px-3 my-3 mx-5 font-bold bg-indigo-100 max-w-xl">
        Update
        </h1>
        <form id="data" class="mx-5 my-20" method="post" action="{{'/lists/edit'}}">
        @csrf
        <input type="hidden" id="id" name="id" placeholder="Project Name" class="w-full py-2 px-3 my-3 rounded-lg border border-gray-300 " value="{{$list['id']}}">
        <input type="text" id="name" name="name" placeholder="Project Name" class="w-full py-2 px-3 my-3 rounded-lg border border-gray-300 " value="{{$list['name']}}">
        <input type="text" id="workinghours" name="workinghours" placeholder="Working Hours" class="w-full py-2 px-3 my-3 rounded-lg border border-gray-300" value="{{$list['workinghours']}}">
        <textarea type="text" id="description" name="description" placeholder="Desciption" class="w-full py-2 px-3 my-3 rounded-lg border border-gray-300" value="{{$list['description']}}"></textarea>
        <div class="flex flex-col items-center justify-center">
            <button type="submit" id="sub" class="mt-2 mx-0 bg-green-500 hover:bg-green-300 text-white py-2 px-4 rounded-lg border-solid">Update</button>
        </div>
        </form>
    </div>
</body>
</html> 
