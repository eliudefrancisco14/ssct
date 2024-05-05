<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

@include('layouts._includes.admin.head')

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('layouts._includes.admin.aside')
        <div class="flex flex-col flex-1 w-full">
            @include('layouts._includes.admin.header')
            @yield('conteudo')
        </div>
    </div>
</body>

</html>


