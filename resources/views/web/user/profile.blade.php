@extends('layout.app')
@section('content')
<div class="container mx-auto">
    <div class="flex flex-row justify-center p-12 ">
        @include('partial.user.menu')
        <div class="w-full xl:w-8/12 ml-5">
            <form method="POST" action="{{ route('user-update-profile') }}" enctype="multipart/form-data">
                @csrf
                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="relative gap-4">
                        <div>
                            <img src="{{ asset('assets/images/profilebg.jpg') }}" alt="coverImage" class="w-full h-72 rounded-md">
                        </div>
                        <div class="absolute bottom-[-70px] left-[10%] transform -translate-x-1/2 border-4 border-white rounded-md">
                            <img src={{ asset( $user->profile_picture )}} alt="profilepicture" class="w-32 h-32 rounded-md">
                        </div>
                    </div>
                    <div class=" text-left ml-48 mt-2 mb-8">
                        <h1 class="text-3xl font-bold">{{ $user->name }}</h1>
                    </div>
                    <div class="mt-16">
                        <ul class="list-reset leading-loose">
                            <li>
                                <label for="profile_picture" class="text-lg text-gray-600">Profile Picture:</label>
                                <div id="image-preview" class="w-60"></div>
                                <input type="file" id="profile_picture" class="w-full px-10 py-2 border border-gray-300" name="profile_picture" accept="image/*">
                                <script>
                                    document.getElementById('profile_picture').addEventListener('change', function(event) {
                                        var file = event.target.files[0];
                                        var reader = new FileReader();
                                        reader.onload = function(event) {
                                            var image = document.createElement('img');
                                            image.src = event.target.result;
                                            image.classList.add('preview-image');
                                            document.getElementById('image-preview').innerHTML = '';
                                            document.getElementById('image-preview').appendChild(image);
                                        };
                                        reader.readAsDataURL(file);
                                    });
                                </script>
                            </li>
                            <li class="border-b py-4">
                                <label for="name" class="text-lg text-gray-600">Name:</label>
                                <input type="text" id="name" name="name" value="{{ $user->name }}" class="text-lg float-right text-gray-700">
                            </li>
                            <li class="border-b py-4">
                                <label for="email" class="text-lg text-gray-600">Email:</label>
                                <input type="email" id="email" name="email" value="{{ $user->email }}" class="text-lg float-right text-gray-700">
                            </li>
                            <li class="border-b py-4">
                                <label for="phone" class="text-lg text-gray-600">Phone number:</label>
                                <input type="tel" id="phone" name="phone" value="{{ $user->phone }}" class="text-lg float-right text-gray-700">
                            </li>
                            <li class="border-b py-4">
                                <label for="password" class="text-lg text-gray-600">Password:</label>
                                <input type="password" id="password" name="password" placeholder="Enter new password" class="text-lg float-right text-gray-700">
                            </li>
                        </ul>
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
