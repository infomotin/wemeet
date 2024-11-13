<form action="{{ route('updateAccount') }}" method="POST" enctype="multipart/form-data" class="mx-auto text-white flex-col flex">
    @csrf
    
    <h1 class="2xl:text-[28px] xl:text-[28px] lg:text-[28px] text-[20px] font-semibold">WeMeet</h1>
    <h2 class="text-[26px] xl:mt-8 2xl:mt-8 lg:mt-4">Settings</h2>
    <input type="text" name="name" placeholder="Name" value="{{ $auth->name }}"
    class="my-2 bg-[#404749] lg:w-[470px] xl:w-[470px] 2xl:w-[470px]  h-[50px] text-[14px] rounded px-4"
    >
    
    
         <div class="my-0 lg:w-[470px] xl:w-[470px] 2xl:w-[470px] h-[28px] text-[11px] text-[#FC2323] bg-[#F07650]/[0.20] flex items-center px-2 rounded">
            [message]
        </div> 
    
    <input type="text" name="username" placeholder="Username" value="{{ $auth->username }}"
    class="my-2 bg-[#404749] lg:w-[470px] xl:w-[470px] 2xl:w-[470px]  h-[50px] text-[14px] rounded px-4"
    >
    {{-- Display error message for username--}}
    
        <div class="my-0 lg:w-[470px] xl:w-[470px] 2xl:w-[470px] h-[28px] text-[11px] text-[#FC2323] bg-[#F07650]/[0.20] flex items-center px-2 rounded">
            [message]
        </div>
    
    <input type="text" name="email" placeholder="Email" value="{{ $auth->email }}"
    class="my-2 bg-[#404749] lg:w-[470px] xl:w-[470px] 2xl:w-[470px]  h-[50px] text-[14px] rounded px-4"
    >
    {{-- Display error message for email--}}
   
        <div class="my-0 lg:w-[470px] xl:w-[470px] 2xl:w-[470px] h-[28px] text-[11px] text-[#FC2323] bg-[#F07650]/[0.20] flex items-center px-2 rounded">
            [message]
        </div>
    
    <input type="password" name="password" placeholder="Password" 
    class="my-2 bg-[#404749] lg:w-[470px] xl:w-[470px] 2xl:w-[470px] h-[50px] text-[14px] rounded px-4"
    >
    {{-- Display error message for password--}}
   
        <div class="my-0 lg:w-[470px] xl:w-[470px] 2xl:w-[470px] h-[28px] text-[11px] text-[#FC2323] bg-[#F07650]/[0.20] flex items-center px-2 rounded">
            [message]
        </div>
    
    <div class="flex items-center space-x-6 py-2">
      <div class="shrink-0">
        <img class="h-16 w-16 object-cover rounded-full" src="{{ asset($auth->avatar) }}" alt="Current profile photo" />
      </div>
      <label class="block">
        <span class="sr-only">Choose profile photo</span>
        <input type="file" name="avatar" class="block w-full text-sm text-slate-500
          file:mr-4 file:py-2 file:px-4
          file:rounded-full file:border-0
          file:text-sm file:font-semibold
          file:bg-violet-50 file:text-gray-700
          hover:file:bg-gray-100
        "/>
      </label>
    </div>
    {{-- Display error message for profile image--}}
    
        <div class="my-0 lg:w-[470px] xl:w-[470px] 2xl:w-[470px] h-[28px] text-[11px] text-[#FC2323] bg-[#F07650]/[0.20] flex items-center px-2 rounded">
           [message]
        </div>
    
    <button type="submit" class="my-4 bg-[#487D27] lg:w-[470px] xl:w-[470px] 2xl:w-[470px]  h-[60px] text-[16px] rounded px-4 font-semibold  hover:bg-[#287D27]">Update</button>
    {{-- Display sucess message--}}
        
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <span class="font-medium">success</span>
    </div>
    

    <div>
        <span class="text-[14px] mx-2">Back to<a href="{{ url('/home') }}" class="hover:underline text-[#287D27] mx-2">Home</a>page.</span>
    </div>
</form>
