<x-app-layout>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="mb-12">
                <h2 class="text-2xl font-medium text-gray-900 title-font">
                    {{$listing->title}}
                </h2>
                <div class="md:flex-grow mr-8 mt-2 flex items-center justify-start">
                    @foreach($listing->tags as $tag)
                    <span class="inline-block ml-2 tracking-wide text-xs font-medium title-front py-0.5 px-1.5 border border-indigo-500 uppercase {{$tag->slug === request()->get('tag') ? 'bg-indigo-500 text-white' : 'bg-white text-indigo-500'}}">
                        {{$tag->name}}
                    </span>
                    @endforeach
                </div>
            </div>
            <div class="-my-6">
                <div class="flex flex-wrap md:flex-nowrap">
                    <div class="content w-full md:w-3/4 pr-4 leading-relaxed text-base">
                        {!! $listing->content !!}
                    </div>
                    <div class="w-full md:w-1/4 pl-4">
                        <img 
                        class="max-w-full mb-4"
                        src="/storage/{{$listing->logo}}" alt="{{$listing->company}} logo" />
                        <p class="leading-relaxed text-base">
                            <strong>Location: </strong>{{$listing->location}} <br />
                            <strong>Company: </strong>{{$listing->company}}
                        </p>
                        <a href="{{ route('listings.apply', $listing->slug) }}" class="hover:text-white hover:bg-indigo-500 border border-indigo-500 py-2 title-font font-medium block text-center my-4 tracking-wide bg-white uppercase">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>