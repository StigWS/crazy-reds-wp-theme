<div class="container items-center">
  <div class="text-blueGray-700 transition duration-500 ease-in-out transform bg-white border-b mb-4">
    <div class="flex flex-col flex-wrap p-5 mx-auto md:items-center md:flex-row">
      <a class="pr-2 lg:pr-8 lg:px-6 focus:outline-none text-center md:text-left" href="{{ home_url('/') }}">
        <div class="inline-flex items-center">
          <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-blue-500 to-blue-600">
          </div>
          <h2 class="block p-2 text-xl font-medium tracking-tighter text-black transition duration-500 ease-in-out transform cursor-pointer hover:text-blueGray-500 lg:text-x lg:mr-8"> {{ get_bloginfo('name', 'display') }} </h2>
        </div>
      </a>
      <nav class="flex flex-wrap items-center justify-center text-base md:ml-auto md:mr-auto">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'items-center inline-block list-none lg:inline-flex']) !!}
        @endif
      </nav>
    </div>
  </div>
</div>
