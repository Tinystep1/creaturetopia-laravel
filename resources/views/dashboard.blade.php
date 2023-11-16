<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @yield('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Hello, {{Auth::user()->username;}}!
                </div>
                <div>
                    <!-- Button to add new pets -->
                    <button type="button" data-bs-toggle="modal" data-bs-target="#createPet" class="btn btn-primary" title="Add Pet">Create Pet</button>
                </div>
                <!-- The Modal -->
                    <div class="modal" id="createPet">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Create New Pet</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="mb-3">
   
                                        <label for="name" class="form-label">Pet name</label>
                                        <input type="name" class="form-control" id="name" placeholder="Enter new pet's name">
    
                                    <button type="submit" class="btn btn-ptimary">Create</button>
                </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

    </div>
  </div>
</div>
            </div>
        </div>
    </div>
</x-app-layout>

{{-- <form method="POST" action="{{url("/pets")}}">
    <div class="mb-3">
   
        <label for="name" class="form-label">Pet name</label>
        <input type="name" class="form-control" id="name" placeholder="Enter new pet's name">

        <button type="submit" class="btn btn-ptimary">Create</button>
    </div>
</form> --}}