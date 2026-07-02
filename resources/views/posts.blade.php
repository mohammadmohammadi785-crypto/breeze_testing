<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite("resources/css/app.css")
</head>
<body>
    <div class="w-full min-h-screen bg-stone-100">
        <div class="w-full max-w-7xl mx-auto p-4">
            <div class="">
                <form method="post">
                    <input type="text">
                </form>
            </div>
            @if (count($posts) > 0)
            <table class="w-full border-2">
                <tr>
                    <th class="border py-2 text-center">Post title</th>
                    <th class="border py-2 text-center">Post description</th>
                    <th class="border py-2 text-center">Update</th>
                    <th class="border py-2 text-center">Delete</th>
                </tr>
                @foreach ($posts as $post)
                    <tr>
                        <td class="border py-2 text-center">{{ $post->title }}</td>
                        <td class="border py-2 text-center">{{ $post->body }}</td>
                        @can('update')
                        <td class="border py-2 text-center">
                            <a href="" class="bg-blue-500 text-white px-4 py-2 rounded-md">Update</a>
                        </td>
                        @endcan
                        <td class="border py-2 text-center">
                            <a href="" class="bg-red-500 text-white px-4 py-2 rounded-md">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            @endif
        </div>
    </div>
</body>
</html>