<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="font-bold txt-lg">{{$jobs['title']}}</h2>
    <p>
        This job pays {{$jobs['salary']}} per year
    </p>
</x-layout>