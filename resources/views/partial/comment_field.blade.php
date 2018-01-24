<div class="row">
    <section class="col col-12">
        <label class="col col-12">
        {!! Form::text('nickName', null, ['placeholder'=>'please enter you nick name', 'class'=>'form-control nick_name', 'title'=>'your nick name that display', 'required']) !!}
        </label>
    </section>
</div>
@if(!isset(Auth::user()->id))
<div class="row">
    <section class="col col-12">
        <label class="col col-12">
        {!! Form::text('email', null, ['placeholder'=>'your email address', 'class'=>'form-control email_addr', 'title'=>'your email address', 'required']) !!}
        </label>
    </section>
</div>
<div class="row">
    <section class="col col-12">
        <label class="col col-12">
        {!! Form::text('phone', null, ['placeholder'=>'please enter your phone number', 'class'=>'form-control phone', 'title'=>'your mobile number', 'required']) !!}
        </label>
    </section>
</div>
@endif
<div class="row">
    <section class="col col-12">
        <label class="col col-12">
        {!! Form::textarea('event_comment', null, ['placeholder'=>'please say some things', 'class'=>'form-control phone', 'title'=>'comment this post', 'required']) !!}
        </label>
    </section>
</div>