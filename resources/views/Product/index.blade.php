<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full min-h-screen bg-black text-white flex justify-center items-center">
        <nav class="p-3 bg-black text-white border-b fixed top-0 left-0 w-full z-10 flex justify-between">
            <ul class="flex w-full gap-4 justify-between items-center">
                <h1 class="text-2xl ml-5">logo</h1>
                <div class="flex justify-between items-center gap-5 mr-12">
                    <li><a class="text-2xl" href="/">Home</a></li>
                    <li><a class="text-2xl" href="/grade">Grade</a></li>
                    <li><a class="text-2xl" href="/student">Student</a></li>
                    <li><a class="text-2xl" href="/Post">Post</a></li>
                    <li><a class="text-2xl underline underline-offset-5" href="/product">Product</a></li>
                </div>
            </ul>
        </nav>
        <div class="w-full h-full mt-13">
            <div class="w-full flex flex-col mx-auto">
                @foreach($products as $product)
                    <div class="border rounded-md mt-5 w-9/12 mx-auto p-5 grid grid-cols-2">
                        <div>
                            <h1 class="text-3xl font-bold">{{ $product->name }}</h1>
                            <p class="font-semibold text-xl">Price: {{ $product->price }}</p>
                            <p class="font-semibold text-xl">Stock: {{ $product->stock }}</p>
                        </div>
                        <div class="w-full grid grid-cols-2 gap-3">
                            @foreach ($product->images as $image)
                                <img src="{{'/storage/'. $image->image_url }}" class="rounded-md border border-stone-900 h-50 w-full" alt="">
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>