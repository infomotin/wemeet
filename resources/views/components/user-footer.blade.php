<div id="profile-footer" class="bg-[#404749] flex h-[65px] justify-between items-center">
    <div class="px-6">
        <div>
            <div class="flex items-center justify-center">
                <img src="{{$userData->avatar}}" class="rounded-full w-[30px] h-[30px]">
                <a href="{{url('profile/').'/'.$userData->username}}"><span class="px-2 text-white text-[14px] hover:underline cursor-pointer">{{$userData->name}}</span></a>
            </div>
        </div>
    </div>
    <div>
        <a href="{{url('profile/').'/'.$userData->username}}"><span class="text-white mx-4 hover:text-gray-200 cursor-pointer"><i class="fa-solid fa-user-gear" title="Account Settings"></i></span></a>
    </div>
</div>
