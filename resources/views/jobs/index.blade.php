<x-layout>
   <div class="space-y-12">
    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl ">Let's Find your Next Job</h1>
        <form action="" class="mt-8">
            <input type="text" placeholder="Web Developer ..." class="border border-white/10 w-full rounded-xl px-5 py-4  bg-white/15">
        </form>
    </section>
       <section>
           <x-section-heading>Top Jobs</x-section-heading>
           <div class="grid lg:grid-cols-3 gap-8 mt-8">

             @foreach ($jobs as $job)
                <x-job-card :$job/>

             @endforeach
          </div>
      </section>
    <section>

        <x-section-heading>Tags</x-section-heading>
        <div class="space-x-1 mt-4">
           @foreach ($tags as $tag)
              <x-tag :$tag/>
           @endforeach

        </div>
    </section>
    <section>

        <x-section-heading>Recent Jobs</x-section-heading>
       <div class="space-y-6 mt-6 ">
        @foreach ($jobs as $job)
            <x-job-card-wide :$job/>

        @endforeach
    </div>
    </section>


</div>
</x-layout>
