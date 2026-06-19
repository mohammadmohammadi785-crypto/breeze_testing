<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full h-screen bg-black text-white flex justify-center items-center">
        <nav class="p-3 bg-black text-white border-b fixed top-0 left-0 w-full z-10 flex justify-between">
            <ul class="flex w-full gap-4 justify-between items-center">
                <h1 class="text-2xl ml-5">logo</h1>
                <div class="flex justify-between items-center gap-5 mr-12">
                    <li><a class="text-2xl" href="/">Home</a></li>
                    <li><a class="text-2xl" href="/grade">Grade</a></li>
                    <li><a class="text-2xl" href="/student">Student</a></li>
                    <li><a class="text-2xl underline underline-offset-5" href="/Post">Post</a></li>
                    <li><a class="text-2xl" href="/product">Product</a></li>
                </div>
            </ul>
        </nav>
        <div class="w-full mt-13">
            @if (count($posts)>0)
                <div class="w-full flex flex-col mx-auto">
                @foreach ($posts as $post)
                    <div class="border rounded-md mt-5 w-9/12 mx-auto p-5 grid grid-cols-2">
                        <div class="relative w-full flex justify-between flex-col">
                            <p class="text-md font-semibold border rounded-md h-fit w-fit p-3">{{ $post->id }}</p>
                            <h1 class="text-2xl font-bold">{{ $post->title }}</h1>
                            <p class="text-md font-semibold">{{ $post->body }}</p>
                            <a class="text-md font-semibold border rounded-md h-fit w-fit p-3 mt-2" href="/Post/edit/{{ $post->id }}">Update</a>
                        </div>
                        <div class="w-full grid grid-cols-2 gap-3 my-auto">
                            @foreach ($post->images as $image)
                                <img class="rounded-md h-50 w-full border border-stone-900" src="{{'/storage/'.$image->image_url }}" alt="">
                            @endforeach
                        </div>
                    </div>
                @endforeach
                </div>
            @endif
        </div>
    </div>
</body>
</html>