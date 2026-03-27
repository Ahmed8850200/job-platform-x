<x-layout>
    <div class="mt-6 mb-6 space-y-3">
        @foreach($jobs as $job)
            <x-job-card-wide :$job/>
        @endforeach
    </div>
</x-layout>
