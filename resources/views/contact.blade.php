@extends('layout')

<!-- TITULO-->
@section('title', 'Contact')

<!-- END TITLE-->

<!-- BODY -->
@section('content')

    <form method="POST" action="{{ route('contact.store') }}" > 
        @csrf

       
        <div class="card">
            <div class="card-body ">
                <div class="col-md-6 mx-auto">

                    <div class="form-group">
                        <input name="name" class="form-control" placeholder="Nombre" value="{{ old('name') }}">
                        {!! $errors -> first('name', '<small>:message</small>') !!} 
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                        {!! $errors->first('email', '<small>:message</small>') !!}
                    </div>

                    <div class="form-group">
                        <input type="subject" name="edad" class="form-control" placeholder="Edad" value="{{ old('edad') }}">
                        {!! $errors->first('edad', '<small>:message</small>') !!}
                    </div>
                    
                    <div class="form-group">
                            <textarea name="content" class="form-control" placeholder="Mensaje..." id="" cols="30" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                            <input type="submit" class="btn btn-success form-control">
                     </div>
                </div>
                </div>
            </div>   
     
    </form>

@endsection
<!-- END BODY-->