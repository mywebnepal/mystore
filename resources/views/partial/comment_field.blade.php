<div class="row">
    <section class="col col-12">
        <label class="col col-12">
        {!! Form::text('nickName', null, ['placeholder'=>'please enter you nick name', 'class'=>'form-control nick_name', 'title'=>'your nick name that display']) !!}
        </label>
    </section>
</div>
@if(!Auth::user()->id)
<div class="row">
    <section class="col col-12">
        <label class="col col-12">
        {!! Form::text('email', null, ['placeholder'=>'your email address', 'class'=>'form-control email_addr', 'title'=>'your email address']) !!}
        </label>
    </section>
</div>
<div class="row">
    <section class="col col-12">
        <label class="col col-12">
        {!! Form::text('phone', null, ['placeholder'=>'please enter your phone number', 'class'=>'form-control phone', 'title'=>'your mobile number']) !!}
        </label>
    </section>
</div>
@endif
<div class="row">
    <section class="col col-12">
        <label class="col col-6">
        {!! Form::textarea('comment', null, ['placeholder'=>'please say some things', 'class'=>'form-control phone', 'title'=>'comment this post']) !!}
        </label>
    </section>
</div>
@section('custom_script')

@endsection