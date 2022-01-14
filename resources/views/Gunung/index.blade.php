@extends('main')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-dark text-white">
                Map
            </div>
            <div class="card-body">
                <div style='width: 100%; height: 75vh;'>
                    <div id="map"></div>


                </div>
            </div>
        </div>

    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-dark text-white">
                Form
            </div>
            <div class="card-body">
                <form action="" >
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Longitude</label>
                                <input type="text" class="form-control bg-light">
                                {{-- @error('long')
                             <small class="text-danger">
                                 {{ $message }}
                             </small>
                         @enderror --}}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Latitude</label>
                                <input  type="text" name="" id="" class="form-control bg-light">
                                {{-- @error('lat')
                             <small class="text-danger">
                                 {{ $message }}
                             </small>
                         @enderror --}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                         <label for="">Title</label>
                         <input  type="text" class="form-control bg-light" >
                         {{-- @error('title')
                             <small class="text-danger">
                                 {{ $message }}
                             </small>
                         @enderror --}}
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea  type="text" class="form-control bg-light"></textarea>
                        {{-- @error('description')
                             <small class="text-danger">
                                 {{ $message }}
                             </small>
                         @enderror --}}
                   </div>
                   <div class="form-group">
                    <label for="">Picture</label>
                       <div class="custom-file">
                        {{-- <input wire:model="image" type="file" class="custom-file-input" id="customFile" style="float: right"> --}}
                        {{-- <label class="custom-file-label dark-input" for="customFile">Choose file</label> --}}
                        {{-- <div class="mb-3"> --}}
                            <label for="formFileSm" class="form-label"></label>
                            <input    type="file" id="customFile" class="form-control form-control-sm" type="file">
                          {{-- </div> --}}
                       </div>
                       {{-- @error('image')
                       <small class="text-danger">
                           {{ $message }}
                       </small>
                   @enderror
                    @if($image)
                        <img src="{{ $image->temporaryUrl()}}" class="img-fluid">
                    @endif --}}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark text-white btn-block" >Submit Location</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
