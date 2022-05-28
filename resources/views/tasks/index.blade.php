<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!--div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div-->
            <!-- debut -->
<!-- component -->
<div class="bg-gray-50 min-h-screen">
  <nav>
    <div class="flex justify-between items-center p-4 bg-white">
      <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" viewBox="0 0 20 20" fill="currentColor">
          <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <div class="flex items-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
        </svg>
        <div class="w-10">
          <img class="rounded-full" src="https://forbesthailand.com/wp-content/uploads/2021/08/https-specials-images.forbesimg.com-imageserve-5f47d4de7637290765bce495-0x0.jpgbackground000000cropX11699cropX23845cropY1559cropY22704.jpg" alt="" />
        </div>
      </div>
    </div>
  </nav>
  <div>
    <div class="p-4">
      <div class="bg-white p-4 rounded-md">
        <div>
          <h2 class="mb-4 text-xl font-bold text-gray-700">Admin & User</h2>
          <div>
            <div>

              <div class="flex justify-between bg-gradient-to-tr from-indigo-600 to-purple-600 rounded-md py-2 px-4 text-white font-bold text-md">
                <div>
                  <span>Description</span>
                </div>
                <div>
                  <span>Action</span>
                </div>
              
              </div>
                 @foreach($tasks as $task)
              <div>
                <div class="flex justify-between border-t text-sm font-normal mt-4 space-x-4">
                  <div class="px-2 flex">
                    <span>{{ $task->description }}</span>
                  </div>
                  <div>
                    <span><a href="{{ route('tasks.show', $task->id)}}">View</a></span>
                    |<span><a href="{{ route('tasks.edit', $task->id)}}">Edit</a></span>
                    |<span>
                        <form action="{{route('tasks.destroy', $task->id)}}">
                          <input type="hidden" name="_method" value="DELETE" >
                          <input type="hidden" name="_token" value="{{csrf_token}}">
                          <input type="submit" value="delete">
                        </form>
                    </span>
                  </div>
                </div>
              </div>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
            <!--fin -->
        </div>
    </div>
</x-app-layout>