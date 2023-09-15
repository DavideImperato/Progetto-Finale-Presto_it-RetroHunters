<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Tutti gli annunci</h2>
            </div>
        </div>
        <div class="row mb-5">
             @foreach($announcements as $announcement)
              <div class="col-12 col-md-6 col-lg-4 mt-2 mb-5">
                <x-card-announcement :announcement="$announcement"/>
              </div>
              @endforeach
              {{$announcements->links()}}
        </div>
    </div>
</x-layout>