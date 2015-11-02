@extends('master')
@section('content')
    <div class="col-md-8">
        @include('navigation')

        <div class="row">
            <div class="col-lg-12">
                <div class="login-form">
                    <h4>Create new recepie</h4>

                    <form action="add-recepie" method="POST" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control" id="name"
                                   value="{!! $recepie->name !!}">
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="servings_time">Servings time:</label>
                                    <input type="text" name="servings_time" class="form-control" id="servings_time"
                                           value="{!! $recepie->servings_time !!}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="cooking_time">Cooking time:</label>
                                    <input type="text" name="cooking_time" class="form-control" id="cooking_time"
                                           value="{!! $recepie->cooking_time !!}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="prep_time">Prep time:</label>
                                    <input type="text" name="prep_time" class="form-control" id="prep_time"
                                           value="{!! $recepie->prep_time !!}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ingredients">Ingredients</label>
                            <textarea type="text" name="ingredients" class="form-control"
                                      id="ingredients">{!! $recepie->ingredients !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="methed">Methed</label>
                            <textarea type="text" name="methed" class="form-control"
                                      id="methed">{!! $recepie->methed !!}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-6"><img src="{!! asset($recepie->image) !!}"
                                                       alt="{!! $recepie->name !!}"></div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="methed">Image</label>
                                    <input type="file" name="image" id="image">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="methed">Visibility</label>
                            <select class="form-control" name="display">
                                <option value="{!! $recepie->display !!}"><?php if ($recepie->display == 0) {
                                        echo 'Private';
                                    } else {
                                        echo 'Public';
                                    }?></option>
                                <option value="0">Private</option>
                                <option value="1">Public</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-6">
                                <button type="submit" class="btn btn-default right">Submit</button>
                            </div>
                        </div>
                    </form>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    @include('sidebar')
@stop