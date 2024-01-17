<x-layouts.main>

        <x-slot:title>

        </x-slot:title>
    <x-page-start>
       Postni Ozgartirish #{{ $post->id}}
    </x-page-start>


    <div class="row">
        <div class="container col-lg-7 mb-5 mb-lg-0">
            <div id="success"></div>
            <form action="{{ route('posts.update', ['post'=> $post->id])}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="col-sm-6 control-group mb-4">
                    <input type="text" class="form-control p-4" name="title" value="{{$post->title}}" placeholder="title"/>
                    @error('title')
                    <p class="help-block text-danger">{{$message}}</p>
                    @enderror
                </div>



                <div class="control-group mb-4">
                    <textarea class="form-control" name="body" rows="4"  placeholder="body">{{ $post->body}}</textarea>
                    @error('body')
                    <p class="help-block text-danger"></p>
                    @enderror
                </div>



                <div>
                    {{-- <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Send Message</button> --}}
                    <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Saqlash</button>
                </div>

            </form>
        </div>
    </div>


</x-layouts.main>