@auth
    <div class="p-4">
        <form action="{{route('tweet.create')}}" method="post">
            @csrf
            <div class="mt-1">
                <textarea name="tweet" id="" cols="30" rows="3" class="focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full shadow-sm sm:text-sm boder boder border-gray-300 rounded-md p-2" placeholder="input here"></textarea>
            </div>
            <p class="mt-2 text-sm text-gray-500" >140 digital</p>
            @error('tweet')
                <p style="color: red">{{$message}}</p>
                <x-alert.error>{{$message}}</x-alert.error>
            @enderror
            <div class="flex flex-wrap justify-end">
                <x-element.button class="button">Submit</x-element.button>
            </div>
        </form>
    </div>
@endauth
@guest
    <div class="flex flex-wrap justify-center">
        <div class="w-1/2 p-4 flrx flex-wrap justify-center">
            <x-element.button-a :href="route('login')">ログイン</x-element.button-a>
            <x-element.button-a :href="route('register')" theme="secondary">会員登録 </x-element.button-a>
        </div>
    </div>
@endguest