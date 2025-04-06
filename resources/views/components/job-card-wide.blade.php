  @props(['job'])
  <x-panel class=" flex gab-x-6 ">
            <div>

                <x-employer-logo/>
            </div>
            <div class="flex-1 flex flex-col ml-3">

                <a href="#" class="slef-start text-sm text-gray-400">{{ $job->employer->name }}</a>
                <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800">{{ $job->title }}</h3>
                <p class="text-sm text-gray-400 mt-auto">Full Time - From $60,000</p>
              </div>
              <div >
                 @foreach ($job->tags as $tag)
                   <x-tag
                   :$tag

                   />

                   @endforeach


              </div>

</x-panel>
