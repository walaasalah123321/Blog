@extends('dashboard.master.master')
@section('main')
<div class="container-fluid">

    <div class="animated fadeIn">
        <div class="row">
         
            <!--/col-->
            <form action="{{route('admin.setting.store',[$setting])}}" method="POST" enctype="multipart/form-data">

            <div class="col-sm-12">

                <div class="card ">
                    @csrf

                    <div class="card-header">
                        
                        <strong>{{__('words.setting')}}</strong>
                    </div>
                    <div class="card-block">
                       <div class="row">
                        <div class="form-group col-sm-5">
                            <img src="{{asset('assets/images/'.$setting->logo)}}" alt="" width="80px" height="80px"><br>
                            <label >{{__('words.logo')}}</label>
                            <input type="file" class="form-control" name="logo" >
                           
                        </div>

                        <div class="form-group col-sm-5" >
                            <img src="{{asset('assets/images/'.$setting->favican)}}" alt="" width="80px" height="80px"><br>
                            <label >{{__('words.fav')}}</label>
                            <input type="file" class="form-control" name="favican"   >
                        </div>
                       </div>
                       <div class="row">
                        <div class="form-group col-sm-5">
                            <label > {{__('words.face')}} </label>
                            <input type="text" class="form-control" name="facebook" value="@if ($setting["facebook"]!=null) {{$setting["facebook"] }}@endif" placeholder="{{__('words.EnterFacebook')}}">
                           
                        </div>

                        <div class="form-group col-sm-5" >
                            <label >{{__('words.insta')}}</label>
                            <input type="text" class="form-control"  name="instagram" value="@if ($setting["instagram"]!=null) {{$setting["instagram"] }}@endif"
                             placeholder="{{__('words.Enterinsta')}} ">
                        </div>
                       </div>

                       <div class="row">
                        <div class="form-group col-sm-5">
                            <label >{{__('words.phone')}} </label>
                            <input type="text" class="form-control" name="phone"  value="@if ($setting["phone"]!=null) {{$setting["phone"] }}@endif"
                              placeholder="{{__('words.EnterPhone')}}">
                           
                        </div>

                        <div class="form-group col-sm-5" >
                            <label >{{__('words.email')}}</label>
                            <input type="email" class="form-control" name="email"  placeholder="{{__('words.EnterEmail')}}">
                        </div>
                       </div>
                     
                    </div>
                  
                </div>

            </div>
            <!--/col-->

            <div class="col-sm-12">

                <div class="card ">
                    <div class="card-header">
                        <strong>Company</strong>
                        <small>Form</small>
                    </div>
                    <div class="card-block">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li class="nav-item">
                                <a class="nav-link  @if ($loop->index == 0)  active  @endif"  href="#{{$properties['name']}}" 
                                    id="home-tab" data-toggle="tab"  role="tab"  aria-controls="home" aria-selected="true">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <div class="tab-pane mt-3 fade @if($loop->index == 0) show active in @endif " 
                                id="{{$properties['name']}}" role="tabpanel" aria-labelledby="home-tab">     
                                <br>
                               <div class="form-group">
                                    <label for="company"> {{__("words.title")}} {{ $properties['native']}}</label>
                                    <input type="text" name="{{$localeCode}}[title]" class="form-control" id="company"
                                     placeholder="{{__('words.EnterTitle')}}"
                                     value="@if ($setting->translate("$localeCode")->title!=null) {{$setting->translate("$localeCode")->title}}@endif"
                                     >
                                </div>
                                <div class="form-group">
                                    <label for="vat"> {{__('words.content')}} {{$properties['native']}}</label>
                                    <textarea id="textarea-input" name="{{$localeCode}}[content]" rows="9" 
                                    class="form-control" placeholder="">@if ($setting->translate("$localeCode")->content!=null) {{$setting->translate("$localeCode")->content}} @endif</textarea>                                 
                                </div>
                                <div class="form-group">
                                    <label for="vat"> {{__('words.address')}} {{$properties['native']}}</label>
                                    <input type="text" class="form-control" name="{{$localeCode}}[address]" id="vat" 
                                    placeholder=" {{__('words.EnterAddress')}}"
                                    value="@if ($setting->translate("$localeCode")->address!=null) {{$setting->translate("$localeCode")->address}}@endif"
                                    >
                                </div>
                                <!--/row-->
                            </div>
                            @endforeach
                        </div>
                        
                        
                    </div>
                    <div class="card-block ">
                        <div class="col-sm-10"></div>
                        <div class="col-sm-2">
                            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
                        </div>
                    </div>
                </div>

            </div>

          
            </form>
        </div>
        <!--/.row-->

       
    </div>
</div>
    
@endsection