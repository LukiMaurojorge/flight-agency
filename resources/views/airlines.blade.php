@extends('layout')

<head>
    @vite(['resources/js/airline.js'])
</head>

@section('content')
<div class="bg-white flex gap-10 h-full">
    <div class="shadow-lg p-4 flex flex-col gap-8 h-full">
        <h1 class="text-5xl">Create airline</h1>
        <form id="airlineForm" action="" class="flex flex-col items-start gap-7">
            <div class="w-72">
                <div class="relative w-full min-w-[200px] h-10">
                    <input id="name" class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-black placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900" placeholder=" " /><label class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-gray-200 peer-focus:before:!border-gray-900 after:border-blue-gray-200 peer-focus:after:!border-gray-900">Name
                    </label>
                </div>
            </div>

            <div class="w-96">
                <div class="relative w-full min-w-[200px]">
                    <textarea id="description" class="peer h-full min-h-[100px] w-full resize-none rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-black placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:resize-none disabled:border-0 disabled:bg-blue-gray-50" placeholder=" "></textarea>
                    <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Description
                    </label>
                </div>
            </div>

            <button id="submitButton" class="bg-white hover:bg-gray-100 text-gray-800 text-sm py-2 px-4 border border-gray-400 rounded shadow">
                Create airline
            </button>
        </form>
    </div>

    <div class="flex flex-col w-full h-dull">
        <div class="-mt-1.5 overflow-x-auto h-full">
            <div class="p-1.5 min-w-full inline-block align-middle h-full">
                <div class="overflow-hidden flex flex-col gap-7 items-center text-left relative h-full">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        @if(count($airlines) != 0) <thead id="tableHeader">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">ID</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Description</th>
                            </tr>
                        </thead>
                        @endif
                        <tbody id="airlineTable" class="divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach($airlines as $airline)
                            <tr>
                                <td id="airlineId" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{ $airline->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 truncate">{{ $airline->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 truncate">{{ $airline->description }}</td>
                                <td><button id="openModalButton" data-id="{{ $airline->id }}"><x-heroicons::outline.document class=" h-6 w-6" /></button></td>
                                <td><button id="trash" data-id="{{ $airline->id }}" class="deleteButton"><x-heroicons::outline.trash class="h-6 w-6" /></button></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>{{ $airlines->links() }}</div>

                    <div id="modal" class="absolute top-56 shadow-2xl rounded-lg p-7 hidden bg-gray-800 text-white">
                        <form id="updateForm" class="flex flex-col gap-5" method="PUT">
                            <div class="flex justify-between">
                                <h1 class="text-3xl">Update airline</h1>
                                <button id="closeModalButton">
                                    <p>x</p>
                                </button>
                            </div>

                            <input type="hidden" id="hidden" name="airline_id">

                            <div class="w-72">
                                <div class="relative w-full min-w-[200px] h-10">
                                    <input required id="updateName" class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-white border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-white focus:border-white" placeholder=" " /><label class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] peer-focus:text-white before:border-blue-gray-200 peer-focus:before:!border-white after:border-white peer-focus:after:!border-white text-white">Name
                                    </label>
                                </div>
                            </div>

                            <div class="w-96">
                                <div class="relative w-full min-w-[200px]">
                                    <textarea required id="updateDescription" class="peer h-full min-h-[100px] w-full resize-none rounded-[7px] border border-white border-t-white bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-white outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-white focus:border-2 focus:border-white focus:border-t-transparent focus:outline-0 disabled:resize-none disabled:border-0 disabled:bg-blue-gray-50" placeholder=" "></textarea>
                                    <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-white transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-white before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-white after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-white peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:border-white peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-white peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                        Description
                                    </label>
                                </div>
                            </div>

                            <button type="submit" id="updateButton" class="bg-white hover:bg-gray-100 text-gray-800 text-sm py-2 px-4 border border-gray-400 rounded shadow">
                                Update airline
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection