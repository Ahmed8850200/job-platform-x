<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h1 class="font-bold text-4xl pt-6 ">Lets find your next job</h1>
           <x-forms.form action="/search" class="mt-6">
               <x-forms.input name="q" :label="false" placeholder="web developer"/>
           </x-forms.form>
        </section>
        <section class="pt-10">
            <x-section-head>Featured jobs</x-section-head>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach($featured_jobs as $job)
                    <x-job-card :$job/>
                @endforeach


            </div>
        </section>
        <section >
            <x-section-head>Tags</x-section-head>
            <div class="space-x-1 mt-6">
                @foreach($tags as $tag)
                    <x-tag :$tag/>
                @endforeach

            </div>
        </section>
        <section >
            <x-section-head>recent jobs</x-section-head>
            <div class="mt-6 mb-6 space-y-3">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>

        </section>
    </div>

</x-layout>
