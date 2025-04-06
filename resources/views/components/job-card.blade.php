  @props(['job'])
  <x-panel class="flex flex-col text-center" >

            <div class="self-start text-sm">{{ $job->employer->name }}</div>
            <div class="py-8 ">

                <h3 class="group-hover:text-blue-800 text-xl">{{ $job->title }}</h3>
                <p class="text-sm mt-4" >Full Time - From $60,000</p>
              </div>
              <div class="flex justify-between items-center mt-auto">
                <div >
                   @foreach ($job->tags as $tag)
                   <x-tag
                   :$tag

                   />

                   @endforeach


                </div>
                  <x-employer-logo :width="42" />
              </div>

        </x-panel>
