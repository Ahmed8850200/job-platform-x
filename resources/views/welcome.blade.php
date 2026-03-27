<x-layout>
  <div class="space-y-10">
      <section class="text-center">
          <h1 class="font-bold text-4xl pt-6 ">Lets find your next job</h1>
          <form class="mt-6">
              <input type="text" placeholder="Web Developer..." class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
          </form>
      </section>
      <section class="pt-10">
          <x-section-head>Featured jobs</x-section-head>
          <div class="grid lg:grid-cols-3 gap-8 mt-6">
              <x-job-card/>
              <x-job-card/>
              <x-job-card/>
          </div>
      </section>
      <section >
          <x-section-head>Tags</x-section-head>
          <div class="space-x-1 mt-6">
              <x-tag>Tag</x-tag>
              <x-tag>Tag</x-tag>
              <x-tag>Tag</x-tag>
              <x-tag>Tag</x-tag>
              <x-tag>Tag</x-tag>
              <x-tag>Tag</x-tag>
              <x-tag>Tag</x-tag>
              <x-tag>Tag</x-tag>
              <x-tag>Tag</x-tag>
          </div>
      </section>
      <section >
          <x-section-head>recent jobs</x-section-head>
          <div class="mt-6 mb-6 space-y-3">
              <x-job-card-wide></x-job-card-wide>
              <x-job-card-wide></x-job-card-wide>
              <x-job-card-wide></x-job-card-wide>
              <x-job-card-wide></x-job-card-wide>
              <x-job-card-wide></x-job-card-wide>
          </div>

      </section>
  </div>

</x-layout>
