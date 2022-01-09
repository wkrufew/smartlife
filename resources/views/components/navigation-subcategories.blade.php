@props(['category'])
<div class="grid grid-cols-4 p-4">
    <div>
        <p class="text-lg font-bold text-center text-trueGray-700 mb-3">Subcategorias</p>
        <ul>
            @foreach ($category->subcategories as $subcategory)
                <li>
                    <a href="" class="text-trueGray-700 inline-block font-semibold py-1 px-4 hover:bg-sky-600 hover:text-white rounded-sm">
                        {{$subcategory->name}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="col-span-3 ">
        <img class="w-full h-72 object-cover object-center rounded-md" src="{{ Storage::url($category->image) }}" alt="">
    </div>
</div>