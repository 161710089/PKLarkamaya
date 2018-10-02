@extends('layouts.admin')
@section('content')

<style type="text/css">
        .container{
    margin-top:20px;
}
.image-preview-input {
    position: relative;
  overflow: hidden;
  margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  padding: 0;
  font-size: 20px;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}
      </style>

    
<link href="/cesese/test.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
{{-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}
<!------ Include the above in your HEAD tag ---------->

    

                           <script type="text/javascript">
                             $(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});
                           </script>    


	<div class="row">
		<div class="container">

<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Edit Sekolah</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{Route('dashboard') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{Route('sekolah.index') }}">Sekolah</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Edit Sekolah</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

					<a class="btn btn-secondary" data-toggle="confirmation"  href="{{route('sekolah.index')}}"><i class="mdi mdi-keyboard-backspace"></i></a>
			
			<form action="{{ route('sekolah.update',$tb_s_sekolah->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
			  		{{ csrf_field() }}
<div class="row md-3">
					
  				<div class="col-md-6 col-lg-4 col-xlg-3">
					<div class="form-group {{$errors->has('nama_sekolah') ? 'has-error' : ''}}">
								<label class="control-label">Nama Sekolah </label>
								<input type="text"  class="form-control" value="{{ $tb_s_sekolah->nama_sekolah }}" name="nama_sekolah" required>
								@if ($errors->has('nama_sekolah'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama_sekolah')}}</strong>
									</span>
								@endif
							</div>
						</div>

<div class="col-md-6 col-lg-4 col-xlg-3">
					<div class="form-group {{$errors->has('waktu_buka') ? 'has-error' : ''}}">
								<label class="control-label">Waktu Buka  </label>
								<input type="text"  class="form-control" value="{{ $tb_s_sekolah->waktu_buka }}" name="waktu_buka" required>
								@if ($errors->has('waktu_buka'))
									<span class="help-blocks">
										<strong>{{$errors->first('waktu_buka')}}</strong>
									</span>
								@endif
							</div>
						</div>
			
			<div class="col-md-6 col-lg-4 col-xlg-3">
					<div class="form-group {{$errors->has('hari_buka') ? 'has-error' : ''}}">
								<label class="control-label">Hari Buka </label>
								<input type="text"  class="form-control" value="{{ $tb_s_sekolah->hari_buka }}" name="hari_buka" required>
								@if ($errors->has('hari_buka'))
									<span class="help-blocks">
										<strong>{{$errors->first('hari_buka')}}</strong>
									</span>
								@endif
							</div>
						</div>
				</div>
			<div class="row md-3">
	
			<div class="col-md-6 col-lg-4 col-xlg-3">
					<div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
								<label class="control-label">Alamat </label>
								<input type="text"  class="form-control" value="{{ $tb_s_sekolah->alamat }}" name="alamat" required>
								@if ($errors->has('alamat'))
									<span class="help-blocks">
										<strong>{{$errors->first('alamat')}}</strong>
									</span>
								@endif
							</div>
						</div>

<div class="col-md-6 col-lg-4 col-xlg-3">
					<div class="form-group {{$errors->has('no_telepon') ? 'has-error' : ''}}">
								<label class="control-label">No Telepon </label>
								<input type="text"  class="form-control" value="{{ $tb_s_sekolah->no_telepon }}" name="no_telepon" required>
								@if ($errors->has('no_telepon'))
									<span class="help-blocks">
										<strong>{{$errors->first('no_telepon')}}</strong>
									</span>
								@endif
							</div>
						</div>

			<div class="col-md-6 col-lg-4 col-xlg-2">					
  						<div class=" {{ $errors->has('logo') ? ' has-error' : '' }}">
              				<label >logo</label>
              				
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" 
                        value="" class="form-control" name="logo"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
			@if ($errors->has('logo'))
                            	<span class="help-block">
                                	<strong>{{ $errors->first('logo') }}</strong>
                           	 </span>
                       	 @endif
            			</div>
        		</div>
        	</div>

        	<div class="row md-3">
							<div class="col-md-6 col-lg-4 col-xlg-3">
							<div class="form-group {{$errors->has('Instagram') ? 'has-error' : ''}}">
								<label class="control-label">Instagram</label>
								<input type="text"  class="form-control" value="{{ $tb_s_sekolah->Instagram }}" name="Instagram" >
								@if ($errors->has('Instagram'))
									<span class="help-blocks">
										<strong>{{$errors->first('Instagram')}}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="col-md-6 col-lg-4 col-xlg-3">
							<div class="form-group {{$errors->has('Twitter') ? 'has-error' : ''}}">
								<label class="control-label">Twitter</label>
								<input type="text"  class="form-control" value="{{ $tb_s_sekolah->Twitter }}" name="Twitter" >
								@if ($errors->has('Twitter'))
									<span class="help-blocks">
										<strong>{{$errors->first('Twitter')}}</strong>
									</span>
								@endif
							</div>
						</div>				
	
						<div class="col-md-6 col-lg-4 col-xlg-3">
							<div class="form-group {{$errors->has('Twitter') ? 'has-error' : ''}}">
								<label class="control-label">Facebook </label>
								<input type="text"  class="form-control" value="{{ $tb_s_sekolah->Facebook }}" name="Facebook" >
								@if ($errors->has('Twitter'))
									<span class="help-blocks">
										<strong>{{$errors->first('Twitter')}}</strong>
									</span>
								@endif
							</div>
						</div>			

			</div>
        		<br>

							<div >
								<button type="submit" class="btn btn-primary">Edit</button>
							</div>
						</form>
							</div>
								
			</div>
	
@endsection
