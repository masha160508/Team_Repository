<form action="{{route('logout')}}" method="POST">
    @csrf
    <input type="submit" id="logout" value="Logout">
</form>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

<style>
    #logout{
        color: white;
        width: 15vh;
        height: 7vh;
        border: 2px solid transparent;
        transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
        background: #c2a5ed;
        margin-top: 5vh;
        margin-left: 1.5vh;
        border-radius: 2vh;
    }
    #logout:hover{
        background-color: white !important;
        color: #c2a5ed;
        border-color: violet;
        box-shadow: 0 0 20px #c2a5ed;
    }
</style>


