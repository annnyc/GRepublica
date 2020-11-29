@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="nav nav-pills " id="faq-tabs" role="tablist">


                <div class="card-body">
                    <a href="#tab1" class="nav-link active"  role="tab" aria-controls="tab1" >
                        <i class="mdi mdi-help-circle"></i> Frequently Asked Questions
                    </a>

                    <a href="#tab1" class="nav-link active"  role="tab" aria-controls="tab1" >
                        <i class="mdi mdi-help-circle"></i> Voltar
                    </a>
                </div>

            </div>
        </div>
        <div class="col-lg-8">
            <div class="tab-content" id="faq-tab-content">
                <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                    <div class="accordion" id="accordion-tab-1">
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-1">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Just once I'd like to eat dinner with a celebrity?</button>
                                </h5>
                            </div>
                            <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>Yes, if you make it look like an electrical fire. When you do things right, people won't be sure you've done anything at all. I was having the most wonderful dream. Except you were there, and you were there, and you were there! No argument here. Goodbye, cruel world. Goodbye, cruel lamp. Goodbye, cruel velvet drapes, lined with what would appear to be some sort of cruel muslin and the cute little pom-pom curtain pull cords. Cruel though they may be.</p>
                                    <p><strong>Example: </strong>Shut up and get to the point!</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-2">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">Bender, I didn't know you liked cooking?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>That's so cute. Can we have Bender Burgers again? Is the Space Pope reptilian!? I wish! It's a nickel. Bender! Ship! Stop bickering or I'm going to come back there and change your opinions manually!</p>
                                    <p><strong>Example: </strong>Okay, I like a challenge. Is that a cooking show? No argument here.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-3">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">My fellow Earthicans?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>As I have explained in my book 'Earth in the Balance', and the much more popular 'Harry Potter and the Balance of Earth', we need to defend our planet against pollution. Also dark wizards. Fry, you can't just sit here in the dark listening to classical music.</p>
                                    <p><strong>Example: </strong>Actually, that's still true. Well, let's just dump it in the sewer and say we delivered it.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-4">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">Who am I making this out to?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>Morbo can't understand his teleprompter because he forgot how you say that letter that's shaped like a man wearing a hat. Also Zoidberg. Can we have Bender Burgers again? Goodbye, cruel world. Goodbye, cruel lamp. Goodbye, cruel velvet drapes, lined with what would appear to be some sort of cruel muslin and the cute little pom-pom curtain pull cords.</p>
                                    <p><strong>Example: </strong>Cruel though they may be...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection