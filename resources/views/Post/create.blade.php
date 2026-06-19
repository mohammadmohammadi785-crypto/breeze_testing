<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full flex h-screen justify-center items-center bg-black text-white">
        <div class="w-1/2 p-4 border rounded-md">
            <h1 class="text-2xl text-center font-black">Post Create</h1>
            <form action="{{ url('/create-post') }}" enctype="multipart/form-data" method="post" class="w-full flex flex-col gap-2.5">
                @csrf
                <input class="py-3 px-2 w-full border rounded-md focus:outline-0" name="title" type="text">
                <input class="py-3 px-2 w-full border rounded-md focus:outline-0" name="body" type="text">
                <input class="py-3 px-2 w-full border rounded-md focus:outline-0" name="image1" type="file" accept="image/*">
                <input class="py-3 px-2 w-full border rounded-md focus:outline-0" name="image2" type="file" accept="image/*">
                <input type="submit" class="w-full py-2 border rounded-md" value="Save">
            </form>
        </div>
    </div>
</body>
</html>