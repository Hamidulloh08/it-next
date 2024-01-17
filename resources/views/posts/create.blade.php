<x-layouts.main>

    <x-slot:title>
        CREAT NEW POST
    </x-slot:title>

        <x-page-start>
            CREAT
        </x-page-start>


        <div class="row">
            <div class="container col-lg-7 mb-5 mb-lg-0">
                <div id="success"></div>
                <form action="{{ route('posts.store')}}" method="POST">
                    @csrf
                    <div class="col-sm-6 control-group mb-4">
                        <input type="text" class="form-control p-4" name="title" value="{{ old('title')}}" placeholder="title"/>
                        @error('title')
                        <p class="help-block text-danger">{{$message}}</p>
                        {{-- <div class="alert alert-danger">{{$message}}</div> --}}
                        @enderror
                    </div>

                    <div class="col-sm-6 control-group mb-4">
                        <select name="category_id" >
                            @foreach ($categories as $category)
                                <option value="{{ $category->id}}">{{ $category->name}}</option>
                            @endforeach
                        </select> 
                    </div>


                    <div class="control-group mb-4">
                        <textarea class="form-control" name="body" rows="4"  placeholder="body">{{ old('body')}}</textarea>
                        @error('body')
                        <p class="help-block text-danger">{{$message}}</p>
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