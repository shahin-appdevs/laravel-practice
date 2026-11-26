<x-layout>
    <section>
            <p class="text-sm font-semibold uppercase tracking-widest text-indigo-600">Developer Portfolio</p>
            <h1 class="mt-4 text-5xl font-bold tracking-tight sm:text-6xl">Hi, I am {{$name}}</h1>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-stone-600">I build things for the web.</p>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-stone-600">{{ $email }}</p>
            <a href="/about" class="mt-10 inline-block rounded-lg bg-stone-900 px-5 py-3 text-sm font-semibold text-white hover:bg-stone-700">About me</a>
        </section>

    <section class="mt-20">
        <h2 class="text-3xl font-bold tracking-tight">Projects</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

        @foreach($projects as $project)

            <div class="overflow-hidden rounded-xl border border-stone-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md">
            @if($project->image)
                <img src="{{asset('storage/' . $project->image)}}" alt="{{$project->title}}" class="h-48 w-full object-cover">
            @endif
                <div class="p-5">
                    <h3 class="text-lg font-semibold">{{$project->title}}</h3>
                    <p class="mt-2 text-sm leading-6 text-stone-600">{{$project->description}}</p>
                    @if($project->github_url)
                    <a href="{{$project->github_url}}" target="_blank" class="mt-4 inline-block text-sm font-semibold text-indigo-600 hover:text-indigo-800">View on GitHub &rarr;</a>

                    @endif
                    @if ($project->live_url)
                        
                    <a href="{{$project->live_url}}" target="_blank" class="mt-4 inline-block text-sm font-semibold text-indigo-600 hover:text-indigo-800">View project &rarr;</a>
                    @endif
                </div>
            </div>

        @endforeach

        </div>
    </section>


    
</x-layout>