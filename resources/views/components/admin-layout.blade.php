<x-layout>
    <div class="container">
        <div class="row ">

            <div class="col-md-2 mt-5" style="padding-top: 57px;">
                <ul class="list-group mt-5">
                    <li class="list-group-item"><a href="/admin/blogs" style="text-decoration: none">Dashboard</a></li>
                    <li class="list-group-item"><a href="/admin/blogs/create" style="text-decoration: none">Create Blog</a></li>

                  </ul>
            </div>

            <div class="col-md-10">
                {{$slot}}
            </div>

        </div>
    </div>

</x-layout>
