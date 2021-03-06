@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div id="pwdModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h1 class="text-center">What's My Password?</h1>
            </div>
            <div class="modal-body">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-body">

                            <div class="text-center">

                                <p>If you have forgotten your password you can reset it here.</p>
                                <div class="panel-body">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <fieldset>
                                            {{--<div class="form-group">--}}
                                                <input class="form-control input-lg" placeholder="E-mail Address" name="email" type="email" value="{{ old('email') }}">
                                            {{--</div>--}}
                                            <br>
                                            <input class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit">
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>