<div class="row">
                                    @foreach ($images as $img)
                                    
                                        

                                    <div class="col-sm-6 col-md-2">
                                        <div class="thumbnail">
                                            <a name="select_image" id="{{ $img->id }}">
                                            <img class="img img-responsive" src='{{asset('images/icon_size/'.$img->filename.'.jpg')}}'>
                                            </a>
                                            
                                        </div>
                                    </div>

                                    @endforeach
                                    </div>