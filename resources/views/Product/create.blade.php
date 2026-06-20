<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full h-screen gap-2.5 flex justify-center items-center mt-12">
        <form enctype="multipart/form-data" action="{{ URL('/product/add') }}" class="flex  border flex-col justify-center items-center w-9/12 shadow-2xl text-stone-600 bg-stone-100  rounded-md" method="post">
            @csrf
            <h1 class="text-3xl text-center font-black p-4">Products</h1>
            <input class="border py-3 my-1 w-full  focus:outline-0 rounded-md px-4" type="text" name="name">
            <input class="border py-3 my-1 w-full  focus:outline-0 rounded-md px-4" type="number" name="price">
            <input class="border py-3 my-1 w-full  focus:outline-0 rounded-md px-4" type="number" name="stock">
            <input class="border py-3 my-1 w-full  focus:outline-0 rounded-md px-4" type="file" accept="image/*" name="image1">
            <input class="border py-3 my-1 w-full  focus:outline-0 rounded-md px-4" type="file" accept="image/*" name="image2">
            <input class="w-full py-3 my-1 border rounded-md" type="submit" value="Save">
        </form>
    </div>    
</body>
</html>