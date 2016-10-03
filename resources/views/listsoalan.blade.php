@extends('layouts.chal')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form>

                <div class="row">
                        Q1
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-md-8"> 

                      <input type="text" required>
                      <span class="highlight"></span>
                      <span class="bar"></span>
                      <label>Name</label>
                    </div>
                    <button type="submit" class="btn btn-success col-md-3 col-md-offset-1">
                        Lets Go!!
                    </button>
                </div>           
            </form>
            
        </div>
    </div>
</div>
@endsection